angular.module('foodBasketApp')
    .controller('OrderController', orderController);

function orderController($scope) {
    $scope.order = {
        items: []
    };

    $scope.addOrderItem = function (id, price) {
        $scope.order.items.push({
            foodId: id,
            price: price,
            quantity: 1
        });
    };
}