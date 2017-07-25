angular.module('foodDeliveryApp')
    .controller('UserController', userController);

function userController($scope, $rootScope, DataService, $location, $interval) {
    $scope.person = {
        firstName: 'Eren',
        lastName: 'Akpınar'
    };

    $scope.postOrder = function () {
        DataService.postOrder($rootScope.basket, function (response) {
            $scope.emptyBasket();

            (function () {
                var counter = 5;

                $scope.stop = $interval(function () {
                    if (counter > 0) {
                        $rootScope.notify = {
                            message: "<strong>Muhteşem!</strong> Siparişiniz alındı, " + counter + " saniye içinde yönlendiriliyorsunuz..."
                        };
                        counter--;
                    }
                    else {
                        if (angular.isDefined($scope.stop)) {
                            $interval.cancel($scope.stop);
                            $scope.stop = undefined;
                            $rootScope.notify = false;

                            $location.path('/order/' + response.id);
                        }
                    }
                }, 1000);
            })();

        }, function (error) {
            alert(error);
        })
    };

    $scope.emptyBasket = function () {
        $rootScope.basket = [];
    };
}
