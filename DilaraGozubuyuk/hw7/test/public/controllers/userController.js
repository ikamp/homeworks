angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $rootScope, DataService, $location, $timeout) {

    $rootScope.time = 3000;
    $rootScope.flag = false;
    $rootScope.notify = false;

    DataService.getUser(function (response) {
        if (response != false) {
            $rootScope.user = response;
            $rootScope.flag = true;

        } else {
            $rootScope.notify = {
                message: "Login olmadan sipariş veremezsiniz lütfen Login olun veya fırsatlardan yararlanmak için kayıt olun..."
            };

            $timeout(function () {

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

        }
        //$location.path( "/order/" + response.id)
    })

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
    
    $scope.emptyBasket = function () {
        $rootScope.basket = [];
        //console.log($rootScope.basket);
    }
}


