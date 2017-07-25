angular.module('foodDeliveryApp')
    .controller('HomeController', homeController);

function homeController($scope, DataService, $rootScope) {
    $scope.title = 'Siparişlerim';

    DataService.getOrders(function (response) {
        $rootScope.orders = response;
    });
}
