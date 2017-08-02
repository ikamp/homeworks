angular.module('foodDeliveryApp')
		.factory('DataService', dataService);

function dataService($http) {
	return {
        getRestaurantList: getRestaurantList,
        getFoods:getFoods,
        postOrder:postOrder,
        getOrders:getOrders,
        getOrderDetail:getOrderDetail

	};

	function getRestaurantList (callback) {
		$http({
		  method: 'GET',
		  url: '/api/restaurant'
		}).then(function (response) {
		    callback && callback(response.data);
		  }, function (response) {
		  });
	}
	function getFoods (restaurantId,callback, errorCallback) {
		$http({
		  method: 'GET',
		  url: '/api/restaurant/'+restaurantId
		}).then(
			function (response) {
		    	callback && callback(response.data);
		  }, function (response) {
		  		errorCallback && errorCallback(response)
		  });
	}

	function postOrder(order,restaurantId, callback, errorCallback) {
		$http.post('/api/order', {items:order,restaurantId:restaurantId})
			.then(function(response) {
				callback(response.data);
			}, function(error) {
				errorCallback(error);
			});

	}
    function getOrders (callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/order'
        }).then(
            function (response) {
                callback && callback(response.data);
            }, function (response) {
                errorCallback && errorCallback(response)
            });
    }
    function getOrderDetail(orderId, callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/order/' + orderId
        }).then(function (response) {
            callback && callback(response.data);
        }, function (error) {
            errorCallback && errorCallback(error);
        });
    }

}
