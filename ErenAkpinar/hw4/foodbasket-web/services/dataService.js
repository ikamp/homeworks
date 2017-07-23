angular.module('foodBasketApp')
    .factory('DataService', dataService);

function dataService($http) {

    return {
        getRestaurants: getRestaurants,
        getRestaurantFoods: getRestaurantFoods
    }

    function getRestaurants(callback) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/restaurants'
        }).then(function (response) {
            callback && callback(response.data);
        });
    }

    function getRestaurantFoods(callback, id) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/restaurants/' + id
        }).then(function (response) {
            callback && callback(response.data);
        });
    }
}