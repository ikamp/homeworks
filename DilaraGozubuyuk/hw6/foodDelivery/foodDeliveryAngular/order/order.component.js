angular
    .module('foodDeliveryApp')
    .component('orderList', {
        templateUrl: 'order/order.html',
        controller: OrderController
    });

function OrderController() {

    this.items = [
        {
            foodId: 1,
            foodName: 2,
            foodPrice: 3

        }

    ]

    this.addNewOrderItem = function ($foodId, $foodName, $foodPrice) {
        this.items.push({
            "foodId": $foodId,
            "foodName": $foodName,
            "foodPrice": $foodPrice

        })
    };

}
