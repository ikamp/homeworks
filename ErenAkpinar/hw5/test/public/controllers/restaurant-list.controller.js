angular.module('foodDeliveryApp')
    .controller('RestaurantListController', restaurantListController);

function restaurantListController($scope, DataService) {
    $scope.title = 'Restoran Listtesi';

    DataService.getRestaurantList(function (list) {
        $scope.restaurants = list;
    });
}
