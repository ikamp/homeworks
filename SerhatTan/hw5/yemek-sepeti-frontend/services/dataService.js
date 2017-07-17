angular.module('foodDeliveryApp')
.factory('DataService', dataService);

function dataService($http) {

    return {
        getRestaurants: function (callback) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/restaurants'
            }).then(function successCallback(response) {
                callback && callback(response.data);
            }, function errorCallback(response) {
                console.log(response);
            });
        },
        getFoods: function (callback, id) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/foods/'+id
            }).then(function successCallback(response) {
                callback && callback(response.data);
            }, function errorCallback(response) {
                console.log(response);
            });
        },
        getOrders: function (callback) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/orders/4'
            }).then(function successCallback(response) {
                callback && callback(response.data);
            }, function errorCallback(response) {
                console.log(response);
            });
        },
        sendOrder: function (order) {
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/orders/create',
                data: order
            })
            .then(function(response) {
            }, 
            function(response) {
                console.log(response);
            });
        }
    }

}

