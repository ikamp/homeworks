angular
    .module('foodDeliveryApp')
    .component('FoodList', {
        templateUrl: 'food/food.html',
        controller: FoodController
    });

function FoodController() {
    this.newItem = '';

    this.foods = [
        {
            name: 'Suffle',
            price: 10,
            description:"It is tasty"
        }
    ];

}
