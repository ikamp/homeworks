// Define the `foodDelivery` module
angular
    .module('foodDeliveryApp', ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $locationProvider.hashPrefix('');

        $routeProvider
            .when('/home', {
                templateUrl: 'views/home.html',
                controller: 'HomeController'
            })
            .when('/restaurant-list', {
                templateUrl: 'views/restaurant-list.html',
                controller: 'RestaurantListController'
            })
            .when('/order/:id', {
                templateUrl: 'views/order.html',
                controller: 'OrderController'
            })
            .when('/orders', {
                templateUrl: 'views/orders.html',
                controller: 'OrdersController'
            })
            .when('/restaurant/:id', {
                templateUrl: 'views/restaurant-detail.html',
                controller: 'RestaurantDetailController'
            })
            .otherwise({
                redirectTo: '/'
            });

    });
