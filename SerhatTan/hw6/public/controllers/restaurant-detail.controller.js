angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, $rootScope, DataService) {
    $scope.title = 'Restoran Detay';
    $scope.id = $routeParams.id;

    $scope.$on('searchText', function (event, args) {
        $scope.search = args;
    });

    DataService.getFoods($scope.id, function (response) {
        $scope.restaurant = response;
    });

    $scope.addToBasket = function (foodItem) {
        if(!$rootScope.basket || !$rootScope.basket.length) {
            $rootScope.basket = [];
        }
        if(!foodItem.quantity) {
            foodItem.quantity = 1;
        }
        $rootScope.basket.push(foodItem);
    }
}
