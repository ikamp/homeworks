angular.module('foodDeliveryApp')
.controller('FoodController', foodController);

function foodController($scope, DataService) {

	var data = window.location.search;
	index = data.indexOf("=");
	var id = data.substr(index + 1);
	
	DataService.getFoods(function(response) {
		$scope.foods = response;
	}, id);

	$scope.order = function(food) {
		var data = {
			"items": [{"foodid":food.id, "price":food.price, "quantity": 1}]
		};
		DataService.sendOrder(data);
	}
}