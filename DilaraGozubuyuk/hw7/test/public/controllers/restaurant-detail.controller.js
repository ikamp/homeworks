angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, DataService, $rootScope) {
    $scope.title = 'Restoran Detay';


    $scope.id = $routeParams.id;
    $rootScope.basket = {
        restaurantId: $scope.id,
        foods: []
    };

    DataService.getFoods($scope.id, function (response) {
        $scope.restaurant = response;
    })

    $scope.addToBasket = function (foodItem) {
        if (!$rootScope.basket.foods || !$rootScope.basket.foods.length) {
            $rootScope.basket.foods = [];
        }
        if (!foodItem.quantity) {
            foodItem.quantity = 1;
        }
        else {
            var copyBasket = angular.copy($rootScope.basket);
            for (var i = 0; i < copyBasket.foods.length; i++) {
                if (copyBasket.foods[i].id === foodItem.id) {
                    console.log(copyBasket.foods[i].quantity);
                    copyBasket.foods[i].quantity += foodItem.quantity;
                    console.log(copyBasket.foods[i].quantity);
                    $rootScope.basket = angular.copy(copyBasket);
                    return true;
                }
            }
            $rootScope.basket = angular.copy(copyBasket);
            $rootScope.basket.foods.push(foodItem);
            console.log($rootScope.basket.foods);
        }
    };

}
