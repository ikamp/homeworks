angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $interval, $rootScope, DataService, $location) {
    var clearInterval;
    $scope.person = {
        firstName: 'Cem',
        lastName: 'Ezgin'
    };
    $scope.basket = [];

    $scope.postOrder = function (order) {
        $scope.counter = 5;
        DataService.postOrder(order, $rootScope.restaurantId, function (response) {
            $rootScope.notify = {
                message: 'Tebrikler! Siparisiniz alindi, detay sayfasina yonlendiriliyorsunuz...'
            };
            clearInterval = $interval(function () {
                $scope.counter--;
                if ($scope.counter == 0) {
                    $rootScope.notify = false;
                    $location.path('/order/' + response.id);
                    $rootScope.basket = [];
                    $interval.cancel(clearInterval);
                }
            }, 1200);

        }, function (error) {
            alert(error)
        })
    };
    $scope.$on('basket-updated', function (e, param) {
        var foodItem = param.item;

        if (!$scope.basket || !$scope.basket.length) {
            $scope.basket = [];
        }

        if ($scope.basket.length > 0) {
            var copyBasket = angular.copy($scope.basket);
            angular.forEach(copyBasket, function (key, value) {
                if (key.id == foodItem.id) {
                    key.quantity += foodItem.quantity;
                } else {
                    copyBasket.push(foodItem);
                }
            });
            $scope.basket = copyBasket;
        } else {
            $scope.basket.push(foodItem);
        }
    });
    $scope.emptyBasket = function () {
        $scope.basket = [];
    }
}
