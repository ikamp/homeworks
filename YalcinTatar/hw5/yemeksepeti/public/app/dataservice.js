//var app=angular.module('restaurantRecords',[]).constant('URL','http://127.0.0.1:8000/');
angular.module('restaurantRecords', ['ngRoute'])
    .factory('DataService', dataService);

function dataService($http) {
    return {
        getPosts: getPosts
    };

    function getPosts(callback) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/restaurant'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
        });
    }

}