angular
    .module('foodBoxApp')
    .factory('DataService', dataService);

function dataService($http) {
    var alertMessage = "Connection Problem, Please Do Control Your Connection";
    return {
               getFoods: getFoods ,
               getRestaurants: getRestaurants
           };

    function getFoods (callback) {
        $http({
            method: 'GET',
            url: 'http://localhost:8000/food/all'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
            alert(alertMessage, response);
        });
    }

    function getRestaurants (callback) {
        $http({
            method: 'GET',
            url: 'http://localhost:8000/restaurant/all'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
            alert(alertMessage, response);
        });
    }


}
