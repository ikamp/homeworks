angular.module('foodDeliveryApp')
    .factory('DataService', dataService);

function dataService($http) {
    return {
        getPosts: getPosts,
        postOrders: postOrders,
        postOrder: postOrder
    }

    function getPosts(callback) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/restaurant'
        }).then(function successCallback(response) {
            callback && callback(response.data);
        }, function errorCallback(response) {
            console.log(response)
        });
    }


    function postOrders($data, callback) {
        $http({
            method: 'POST',
            data: $data,
            url: 'http://127.0.0.1:8000/order',
            headers: {
                'Content-Type': "application/json"
            }
        })
            .then(function (response) {
                callback(response.data);
            }, function errorCallback(response) {
                console.log(response);
            });
    }

    function postOrder($data, callback) {
        $http({
            method: 'POST',
            data: $data,
            url: 'http://127.0.0.1:8000/order',
            headers: {
                'Content-Type': undefined
            }
        })
            .then(function (response) {
                callback(response.data);
            }, function errorCallback(response) {
                console.log(response);
            });
    }

}
