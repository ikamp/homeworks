// Define the `foodDelivery` module
angular
    .module('foodDeliveryApp', ['ngRoute', 'ngSanitize'])
    .config(function ($routeProvider, $locationProvider) {
        $locationProvider.hashPrefix('');

        $routeProvider
            .when('/', {
                templateUrl: 'views/home.html',
                controller: 'HomeController'
            })
            .when('/restaurant-list', {
                templateUrl: 'views/restaurant-list.html',
                controller: 'RestaurantListController'
            })
            .when('/restaurant/:id', {
                templateUrl: 'views/restaurant-detail.html',
                controller: 'RestaurantDetailController'
            })
            .when('/order/:id', {
                templateUrl: 'views/order-detail.html',
                controller: 'OrderDetailController'
            })
            .otherwise({
                redirectTo: '/'
            });

    });
