angular.module('foodDeliveryApp')
		.factory('DataService', dataService);

function dataService($http) {
	return {
		getPosts: getPosts,
        getFoods: getFoods
	}

	function getPosts (callback) {
		$http({
		  method: 'GET',
		  url: 'http://127.0.0.1:8000/listRestaurants'
		}).then(function successCallback(response) {
		    callback && callback(response.data);
		  }, function errorCallback(response) {
			console.log(response)
		  });
	}

    function getFoods (callback) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/listFoods'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
            console.log(response)
        });
    }
}
