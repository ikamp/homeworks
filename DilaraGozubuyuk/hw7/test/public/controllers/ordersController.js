angular.module('foodDeliveryApp')
    .controller('OrdersController', orderController);

function orderController($scope, DataService, $routeParams) {
    $scope.basket = [];
    $scope.orderId = $routeParams.id;
    $scope.orders = [];

    DataService.getOrders(function (list) {
        $scope.orders = list;
        console.log(JSON.stringify($scope.orders));
    })


}
