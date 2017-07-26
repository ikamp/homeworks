angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $timeout, $rootScope, DataService, $location) {
    $scope.person = {
        firstName: 'Gizem',
        lastName: 'Sevinc'
    };

    $scope.basket = [];
    $scope.time = 5;

    $scope.postOrder = function(order) {
        DataService.postOrder(order, $scope.restaurantId, function (response) {
            $rootScope.notify = {
                message:'Tebrikler! Siparisiniz alindi, detay sayfasina yonlendiriliyorsunuz...'
            };
            $timeout(function () {
                $rootScope.notify = false;
                $scope.$apply(function() {
                    $location.path ('/order/' + response.id);
                });
            },5000)
        },function (error) {
            alert(error)
        })
    };

    var timer=function () {
        if ($scope.time>1) {
            $scope.time-=1;
            $timeout(timer, 1000);
        }
    };
    $timeout(timer, 1000);

    $scope.emptyBasket = function () {
        $scope.basket = [];
    };

    $scope.$on('basket-updated', function (e, param) {
        var foodItem = param.item, flag = true;

        if (!$scope.basket || !$scope.basket.length) {
            $scope.basket = [];
        }

        if ($scope.basket.length > 0) {
            var copyBasket = angular.copy($scope.basket);
            angular.forEach(copyBasket, function (key, value) {
                if (key.id == foodItem.id) {
                    key.quantity += foodItem.quantity;
                    flag = false;
                }
            });
            if (flag) {
                $scope.basket.push(foodItem);
            }
            $scope.basket = copyBasket;
        } else {
            $scope.basket.push(foodItem);
        }
    });
}
