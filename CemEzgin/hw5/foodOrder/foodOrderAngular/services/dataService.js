angular.module('foodDeliveryApp')
    .factory('DataService', dataService);

function dataService($http) {
    return {
        getRestaurants: getRestaurants,
        getFoods: getFoods
    }

    function getRestaurants(callback) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/restaurant'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
        });
    }

    function getFoods(callback, id) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/food/' + id
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
        });
    }

}
