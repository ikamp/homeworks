angular.module('foodDeliveryApp')
		.factory('DataService', dataService);

function dataService($http) {
	return {
		getPosts: getPosts,
        getFoods: getFoods,
        postOrders: postOrders,
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

    function postOrders($data, callback, errorCallback) {
        $http.post('http://localhost:8000/insertOrder', $data)
            .then(function(response) {
                callback(response.data);
            }, function(error) {
                errorCallback(error);
            });

    }
}
