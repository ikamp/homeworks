angular.module('foodDeliveryApp')
		.factory('DataService', dataService);

function dataService($http) {
	return {
		getPosts: getPosts
	}

	function getPosts (callback) {
		$http({
		  method: 'GET',
		  url: 'https://jsonplaceholder.typicode.com/posts'
		}).then(function successCallback(response) {
		    callback && callback(response.data);
		  }, function errorCallback(response) {
		  });
	}

}
