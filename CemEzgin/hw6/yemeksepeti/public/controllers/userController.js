angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $interval, $rootScope, DataService, $location) {
    var clearInterval;
    $rootScope.basket = [];
    $scope.person = {
        firstName: 'Cem',
        lastName: 'Ezgin'
    };

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

    $scope.emptyBasket = function () {
        $rootScope.basket = [];
    }
}
