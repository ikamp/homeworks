angular.module('foodDeliveryApp')
       .controller('OrderController', orderController);

function orderController($scope, $routeParams, $rootScope, DataService) {
    $scope.basket = [];

    $scope.id = $routeParams.id;

    DataService.getOrderDetail($scope.id, function (response) {
        $scope.order = response;
    });
}
