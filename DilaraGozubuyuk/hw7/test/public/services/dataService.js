angular.module('foodDeliveryApp')
    .factory('DataService', dataService);

function dataService($http) {
    return {

        postOrder: postOrder,
        getFood: getFood,
        getFoods: getFoods,
        getOrders: getOrders,
        getRestaurantList: getRestaurantList,
        getOrderDetails: getOrderDetails

    }


    function getOrders(callback) {
        $http({
            method: 'GET',
            url: '/api/order'
        }).then(
            function (response) {
                callback && callback(response.data);
            });
    }

    function postOrder(order, callback) {

        console.log({restaurantId: order.restaurantId, items: order.foods});
        $http.post('api/order', JSON.stringify({restaurantId: order.restaurantId, items: order.foods}))
            .then(function (response) {
                callback(response.data);
                console.log(JSON.stringify(response.data));
            });
    }

    function getRestaurantList(callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/restaurant'
        }).then(
            function (response) {
                callback && callback(response.data);
            }, function (response) {
                errorCallback && errorCallback(response)
            });

    }

    function getOrderDetails($orderId, callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/order/' + $orderId
        }).then(
            function (response) {
                callback && callback(response.data);
            }, function (response) {
                errorCallback && errorCallback(response)
            });

    }

    function getFoods(restaurantId, callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/restaurant/' + restaurantId
        }).then(
            function (response) {
                callback && callback(response.data);
            }, function (response) {
                errorCallback && errorCallback(response)
            });

    }

    function getFood(foodId, callback, errorCallback) {
        $http({
            method: 'GET',
            url: '/api/food/' + foodId
        }).then(
            function (response) {
                callback && callback(response.data);
            }, function (response) {
                errorCallback && errorCallback(response)
            });

    }

}
