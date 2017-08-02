angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, DataService, $rootScope) {
    $scope.title = 'Restoran Detay';
    $scope.id = $routeParams.id;

    $rootScope.basket = {
        restaurantId: $scope.id,
        foods: []
    };

    DataService.getRestaurantFoods($scope.id, function (list) {
        $scope.restaurant = list;
    });

    $scope.addToBasket = function (foodItem) {
        $rootScope.$broadcast('basket-update', {item: foodItem});
    };

    $scope.$on('basket-update', function (e, param) {
        var foodItem = param.item, flag = true;

        if (!$rootScope.basket.foods || $rootScope.basket.foods.length === 0) {
            $rootScope.basket.foods = [];
        }

        if ($rootScope.basket.foods.length > 0) {
            angular.forEach($rootScope.basket.foods, function (key, value) {
                if (key.id === foodItem.id) {
                    key.quantity += foodItem.quantity;
                    flag = false;
                }
            });

            if (flag) {
                $rootScope.basket.foods.push(foodItem);
            }
        }
        else {
            $rootScope.basket.foods.push(foodItem);
        }
    });
}
