angular.module('foodDeliveryApp')
       .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
	$scope.title = 'Yemekler';
	$scope.loading = false;

	$scope.getPosts = function () {
		$scope.loading = true;
		DataService.getPosts(function(response) {
			$scope.loading = false;
			$scope.posts = response;
		});
	}

	$scope.$watch('posts',function(newValue){
		if(newValue)
			alert("yee",newValue);
	});
}
