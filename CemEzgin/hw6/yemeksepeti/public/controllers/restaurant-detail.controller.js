angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, DataService, $rootScope) {
    $scope.title = 'Restoran Detay';
    $scope.id = $routeParams.id;
    $rootScope.restaurantId = $scope.id;

    DataService.getFoods($scope.id, function (response) {
        $scope.restaurant = response;
    });

    $scope.addToBasket = function (foodItem) {
        if (!$rootScope.basket || !$rootScope.basket.length) {
            $rootScope.basket = [];
        }
        if (!foodItem.quantity) {
            foodItem.quantity = 1;
        }
        $rootScope.basket.push(foodItem);
    }
}
