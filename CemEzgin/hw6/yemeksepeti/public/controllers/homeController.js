angular.module('foodDeliveryApp')
    .controller('HomeController', homeController);

function homeController($scope, DataService) {
    $scope.tab = 'home';
    $scope.oldOrderList = [];
    DataService.getOldOrders(function (response) {
        $scope.oldOrderList = response;
        console.log(response);
    });
}
