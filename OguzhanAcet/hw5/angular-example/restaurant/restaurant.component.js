angular
  .module('foodDeliveryApp')
  .component('restaurantList', {
    templateUrl: 'restaurant/restaurant.html', 
    controller: RestaurantController
  });

function RestaurantController() {
      this.newItem = '';

      this.restaurants = [
        {
          name: 'Burger King',
          district: 'Beyoglu',
          tel: '09786768'
        }, 
        {
          name: 'Mc Donalds',
          snippet: 'Chips are delicious!'
        }, 
        {
          name: 'SushiCo',
          snippet: 'Yummy!'
        }
      ];


      this.addNewRestaurant = function(param) {
        this.restaurants.push({name: param, snippet: 'Yummy!'})  
      };
    }
