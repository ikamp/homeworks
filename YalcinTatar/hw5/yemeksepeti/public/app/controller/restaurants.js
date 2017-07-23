angular.module('restaurantRecords')
    .controller('RestaurantController', restaurantController);

function restaurantController($scope, $http, DataService) {

    $scope.getPosts = function () {
        DataService.getPosts(function (response) {
            $scope.loading = false;
            $scope.posts = response;
        });
    }

}

