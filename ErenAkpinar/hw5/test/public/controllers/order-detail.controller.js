angular.module('foodDeliveryApp')
    .controller('OrderDetailController', orderDetailController);

function orderDetailController($scope, $routeParams, DataService) {
    $scope.title = 'Sipariş Detay';
    $scope.id = $routeParams.id;

    DataService.getOrder($scope.id, function (list) {
        $scope.order = list;
    });
}
