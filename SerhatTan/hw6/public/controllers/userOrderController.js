angular.module('foodDeliveryApp')
    .controller('UserOrderController', userOrderController);

function userOrderController($scope, DataService) {
    DataService.getOrders(function(response) {
        console.log(response);
        $scope.userOrders = response;
    })
}
