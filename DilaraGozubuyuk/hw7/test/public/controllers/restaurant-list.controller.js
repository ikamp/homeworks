angular.module('foodDeliveryApp')
    .controller('RestaurantListController', restaurantListController);

function restaurantListController($scope, DataService, $rootScope, $location) {
    $scope.title = 'Restoran Listtesi';
    $scope.searchRestaurant;
    $scope.restaurants = [];

    $scope.getFoods = function (foodId) {
        $scope.loading = true;
        DataService.getFoods(foodId, function (response) {
            $scope.loading = false;
            $scope.foods = response;
            console.log(response);
        }, function (error) {
            $scope.loading = false;
        });
    };

    $scope.go = function () {
        $location.href = '/#/restaurant/4';
        console.log($location.href);
    };

    $scope.addToBasket = function (foodItem) {
        if (!$rootScope.basket.foods || !$rootScope.basket.foods.length) {
            $rootScope.basket.foods = [];
        }
        if (!foodItem.quantity) {
            foodItem.quantity = 1;
        }
        else {
            for (var i = 0; i < $rootScope.basket.foods.length; i++) {

                if ($rootScope.basket.foods[i].id === foodItem.id) {
                    console.log($rootScope.basket.foods[i].quantity);
                    $rootScope.basket.foods[i].quantity = $rootScope.basket.foods[i].quantity + 1;
                    console.log($rootScope.basket.foods[i].quantity);
                    return true;
                }
            }
            $rootScope.basket.foods.push(foodItem);
        }
    };

    DataService.getRestaurantList(function (list) {
        $scope.restaurantList = list;
        $(document).ready(function () {
            for (var i = 0; i < $scope.restaurantList.length; i++) {
                $('#aPopover' + i).popover();
            }
        });
    });
}
