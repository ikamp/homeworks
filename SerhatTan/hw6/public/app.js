// Define the `foodDelivery` module
angular
	.module('foodDeliveryApp', ['ngRoute', 'ngSanitize'])
        .config(function ($routeProvider, $locationProvider, $httpProvider) {
            $httpProvider.interceptors.push('MyHttpInterceptor');
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
                .when('/restaurant/:id', {
                    templateUrl: 'views/restaurant-detail.html',
                    controller: 'RestaurantDetailController'
                })
                .when('/order/:id', {
                    templateUrl: 'views/order.html',
                    controller: 'orderController'
                })
                .when('/orders', {
                    templateUrl: 'views/user-orders.html',
                    controller: 'UserOrderController'
                })
                .otherwise({
                    redirectTo: '/'
                });

        });
