angular.module('foodDeliveryApp')
    .controller('OrderController', orderController);

function orderController($scope, $rootScope, DataService, $routeParams) {
    $scope.basket = [];
    $scope.orderDetails = [];
    $scope.orderId = $routeParams.id;


    $scope.postOrder = function (order) {

        DataService.postOrder(data)
    }

    DataService.getOrderDetails($scope.orderId, function (list) {
        $scope.orderDetails = list;
        console.log(JSON.stringify($scope.orderDetails));
    })


}
