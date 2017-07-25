angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, DataService, $rootScope) {
    $scope.title = 'Restoran Detay';
    $scope.id = $routeParams.id;

    $rootScope.basket.restaurantId = $scope.id;
    $rootScope.basket.foods = [];

    DataService.getRestaurantFoods($scope.id, function (list) {
        $scope.restaurant = list;
    });

    $scope.addToBasket = function (foodItem) {
        if (!$rootScope.basket.foods || !$rootScope.basket.foods.length) {
            $rootScope.basket.foods = [];
        }
        if (!foodItem.quantity) {
            foodItem.quantity = 1;
        }
        $rootScope.basket.foods.push(foodItem);
    }
}
