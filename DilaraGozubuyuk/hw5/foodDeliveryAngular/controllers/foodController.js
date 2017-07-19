angular.module('foodDeliveryApp')
       .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
	//$scope.title = 'Yemekler';
	$scope.loading = false;
    $scope.flag = false;

	$scope.getPosts = function () {
		$scope.loading = true;
		DataService.getPosts(function(response) {
			$scope.loading = false;
			$scope.posts = response;
		});
	}

    $scope.getFoods = function () {
        $scope.loading = true;
        DataService.getFoods(function(response) {
            $scope.loading = false;
            $scope.posts = response;
        });
    }



}
