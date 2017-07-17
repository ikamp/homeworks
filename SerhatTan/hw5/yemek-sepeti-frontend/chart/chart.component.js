/*
* After building necessary architecture this page will add to manage food chart
*/
angular
.module('foodDeliveryApp')
.component('chart', {
    templateUrl: 'chart/chart.html',
    controller: ChartController
});

function ChartController() {
    this.newItem = '';

    this.foods = [
        {
            name: 'Test',
            price: 0,
            quantity: 0
        }
    ];

    this.addFoodToChart = function(test,test2,test3) {
        this.foods.push({name: test, price: test2, quantity: test3})  
    };
}