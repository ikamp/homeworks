angular.module('foodDeliveryApp')
    .controller('RestaurantDetailController', restaurantDetailController);

function restaurantDetailController($scope, $routeParams, $rootScope, DataService) {
    $scope.title = 'Restoran Detay';
    $scope.id = $routeParams.id;

    $rootScope.restaurantId = $scope.id;

    $scope.$on('searchText', function (event, args) {
        $scope.search = args;
    });

    DataService.getFoods($scope.id, function (response) {
        $scope.restaurant = response;
    });

    $scope.addToBasket = function (foodItem) {
        var copyBasket = angular.copy($scope.basket);

        if(!$rootScope.basket || !$rootScope.basket.length) {
            $rootScope.basket = [];
        }
        if(!foodItem.quantity) {
            foodItem.quantity = 1;
        }

        for(var i=0; i < copyBasket.length; i++) {
            if(copyBasket[i].id == foodItem.id) {
                copyBasket[i].quantity += foodItem.quantity;
                $rootScope.basket = copyBasket;
                return
            }
        }
        $rootScope.basket = copyBasket;
        copyBasket.push(foodItem);
    }
}
