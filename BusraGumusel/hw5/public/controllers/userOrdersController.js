angular.module('foodDeliveryApp')
    .controller('UserOrdersController', userOrdersController);

function userOrdersController($scope, DataService) {

    DataService.getOrders(function (response) {
        $scope.orders = response;
    })
}