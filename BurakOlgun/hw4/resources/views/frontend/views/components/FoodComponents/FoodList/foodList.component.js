angular
    .module('foodBoxApp')
    .component('foodList', {
        templateUrl: 'components/FoodComponents/FoodList/foodList.html',
        controller: foodListController
    });
        function foodListController($scope, DataService) {
            $scope.getFoods = function () {
                DataService.getFoods(function(data) {
                    $scope.foods =  data;
                });
            };

            $scope.filler = $scope.getFoods();
        }