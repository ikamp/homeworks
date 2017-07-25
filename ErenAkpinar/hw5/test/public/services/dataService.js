angular.module('foodDeliveryApp')
    .factory('DataService', dataService);

function dataService($http) {
    return {
        getRestaurantList: getRestaurantList,
        getRestaurantFoods: getRestaurantFoods,
        postOrder: postOrder,
        getOrders: getOrders,
        getOrder: getOrder
    };

    function getRestaurantList(callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/restaurant'
        }).then(function (response) {
            callback && callback(response.data);
        }, function (error) {
            errorCallback && errorCallback(error);
        });
    }

    function getRestaurantFoods(restaurantId, callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/restaurant/' + restaurantId
        }).then(function (response) {
            callback && callback(response.data);
        }, function (error) {
            errorCallback && errorCallback(error)
        });
    }

    function getOrders(callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/order'
        }).then(function (response) {
            callback && callback(response.data);
        }, function (error) {
            errorCallback && errorCallback(error);
        });
    }

    function getOrder(id, callback, errorCallback) {
        $http.get('/api/order/' + id)
            .then(function (response) {
                callback && callback(response.data);
            }, function (error) {
                errorCallback && errorCallback(error);
            });
    }

    function postOrder(order, callback, errorCallback) {
        console.log(order);
        $http.post('/api/order', {foods: order.foods, restaurantId: order.restaurantId})
            .then(function (response) {
                callback(response.data);
            }, function (error) {
                errorCallback(error);
            });
    }
}
