angular.module('foodDeliveryApp')
    .controller('orderController', orderController);

function orderController($scope, $rootScope, DataService) {
    DataService.getOrders(function (response) {
        $scope.orderDetails = response;
        $rootScope.basket = [];
    })
}
