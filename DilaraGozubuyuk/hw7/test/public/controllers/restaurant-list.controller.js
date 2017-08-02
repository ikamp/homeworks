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


    DataService.getRestaurantList(function (list) {
        $scope.restaurantList = list;
        $(document).ready(function () {
            for (var i = 0; i < $scope.restaurantList.length; i++) {
                $('#aPopover' + i).popover();
            }
        });
    });
}
