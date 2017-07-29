angular.module('foodDeliveryApp')
    .controller('orderController', orderController);

function orderController($scope, $routeParams, $rootScope, DataService) {
    $scope.id = $routeParams.id;
    DataService.getOrder($scope.id, function (response) {
        $scope.orderDetails = response;
        $rootScope.basket = [];
    });

    DataService.getOrders(function(response) {
        console.log(response);
    })
}
