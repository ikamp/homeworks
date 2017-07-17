angular.module('foodDeliveryApp')
       .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
	$scope.title = 'Restaurants';
	$scope.loading = false;

	$scope.getPosts = function () {
		$scope.loading = true;
		DataService.getPosts(function(response) {
			$scope.loading = false;
			$scope.posts = response;
		});
	}
}
