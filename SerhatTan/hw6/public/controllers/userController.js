angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $location, $rootScope, $timeout, DataService) {
    $scope.person = {
        firstName: 'Serhat',
        lastName: 'Tan'
    };
    $rootScope.basket = [];

    $scope.searchButton = function () {
        $rootScope.$broadcast('searchText', $scope.search);
    };

    $scope.postOrder = function (order) {
        DataService.postOrder(order, function (response) {
            $rootScope.notify = {
                message: "Siparişiniz başarıyla onaylandı. Yemek Poşeti'ni kullandığınız için teşekkür ederiz."
            };

            $scope.counter = 5;
            $timeout(deneme, 1000);
            function deneme() {
                $scope.counter--;
                if ($scope.counter != 0) {
                    $timeout(deneme, 1000);
                }
            }

            $timeout(function () {
                $rootScope.notify = false;
                $location.path("order/" + response.id);
            }, 5000);

        }, function () {
            $location.path = "/login";
        })
    };

    $scope.emptyBasket = function () {
        scope.basket = [];
    };

    DataService.getOrders(function (response) {
        $rootScope.orders = response;
    })
}
