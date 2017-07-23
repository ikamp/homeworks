angular.module('foodDeliveryApp')
    .controller('RestaurantListController', restaurantListController);

function restaurantListController($scope, $rootScope, $location, DataService) {

    $scope.$on('searchText', function(event, args) {
        $scope.search = args;
    });

    $scope.getFoods = function(foodId) {
        $scope.loading = true;
        DataService.getFoods(foodId, function(response) {
            $scope.loading = false;
            $scope.foods = response;
        }, function(error) {
            $scope.loading = false;
        });
    };

    $scope.go = function () {
        $location.href = '/#/restaurant/4';
    };

    $scope.addToBasket = function (foodItem) {
        if(!$rootScope.basket || !$rootScope.basket.length) {
            $rootScope.basket = [];
        }

        if(!foodItem.quantity) {
            foodItem.quantity = 1;
        }

        $rootScope.basket.push(foodItem);
    };

    DataService.getRestaurantList(function (list){
        $scope.restaurantList = list;
        $(document).ready(function () {
            for (i = 0; i < $scope.restaurantList.length; i++) {
                $('#aPopover'+i).popover();
            }
        });
    });
}
