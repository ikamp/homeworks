angular.module('foodDeliveryApp')
.controller('RestaurantController', restaurantController);

function restaurantController($scope, DataService) {
	DataService.getRestaurants(function(response) {
		$scope.restaurants = response;
	});

	$scope.getFood = function(id) {
		window.location = "food.html?val="+id;
	}

}
