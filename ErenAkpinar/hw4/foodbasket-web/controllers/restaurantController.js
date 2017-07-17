angular.module('foodBasketApp')
    .controller('RestaurantController', restaurantController);

function restaurantController($scope, $http, DataService) {
    $scope.title = 'All Restaurants';
    $scope.loading = false;

    $scope.getRestaurants = function () {
        $scope.loading = true;
        DataService.getRestaurants(function (response) {
            $scope.loading = false;
            $scope.restaurants = response;
        });
    };

    $scope.getRestaurantFoods = function (id) {
        $scope.loading = true;
        DataService.getRestaurantFoods(function (response) {
            $scope.loading = false;
            $scope.restaurantFoods = response;
        }, id);
    };
}