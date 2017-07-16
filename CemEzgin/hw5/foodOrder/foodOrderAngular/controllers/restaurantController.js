angular.module('foodDeliveryApp')
       .controller('RestaurantController', restaurantController);

function restaurantController($scope, $http, DataService) {
	//$scope.title = 'Yemekler';
	$scope.loading = false;

	$scope.getRestaurants = function () {
		$scope.loading = true;
		DataService.getRestaurants(function(response) {
			$scope.loading = false;
			$scope.posts = response;
		});
	}
}
