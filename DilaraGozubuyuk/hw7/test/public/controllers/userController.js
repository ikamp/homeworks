angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $rootScope, DataService, $location, $timeout) {
    $scope.person = {
        firstName: 'Gizem',
        lastName: 'Sevinc'
    };
    $rootScope.basket = [];
    $rootScope.time = 3000;

    $scope.postOrder = function (order) {
        DataService.postOrder(order, function (response) {
            console.log("time fonksiyonu");
            $rootScope.notify = {
                message: "Siparişiniz Alındı 5 saniye içerisinde yönlendriliceksiniz..."
            };
            $timeout(function () {
                $location.path("/order/" + response.id);
            }, 3000);
            //  $location.path("/order/" + response.id)
            var timer = function () {
                if ($rootScope.time > 0) {
                    $rootScope.time -= 1000;
                    $timeout(timer, 1000);
                }
                if ($rootScope.time === 0) {
                    $rootScope.notify = false;
                }
            };
            $timeout(timer, 1000);
        })
    };

    DataService.getOrders(function (response) {
        $rootScope.orders = response
        //$location.path( "/order/" + response.id)
    });

    $scope.emptyBasket = function () {
        $rootScope.basket = [];
        //console.log($rootScope.basket);
    }
}
