angular.module('foodDeliveryApp')
    .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
    $scope.loading = false;

    $scope.getFoods = function () {
        $scope.loading = true;
        DataService.getFoods(function(response) {
            $scope.loading = false;
            $scope.foods = response;
        });
    }
}

