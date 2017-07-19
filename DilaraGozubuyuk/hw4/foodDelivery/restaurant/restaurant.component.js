
angular
    .module('foodDeliveryApp')
    .component('restaurantList', {
        templateUrl: 'restaurant/restaurant.html',
        controller: RestaurantController
    });

function RestaurantController() {
    this.restaurants = [
        {
            name: 'Burger King',
            district: 'Taksim'
        }
    ];
}