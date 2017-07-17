angular
.module('foodDeliveryApp')
.component('order', {
	templateUrl: 'orders/order.html',
	controller: OrderController
});

function OrderController($scope, DataService) {
	DataService.getOrders(function(response) {
		$scope.orders = response;
	});
}