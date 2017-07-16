angular
    .module('foodBoxApp')
    .component('foodList', {
    templateUrl: 'components/FoodComponents/FoodList/foodList.html',
    controller: foodListController
    });
        function foodListController($scope, $http, DataService) {
            $scope.getFoods = function () {
                DataService.getFoods(function(data) {
                    $scope.foods =  data;
                    console.log("service");
                });};

            $scope.filler = $scope.getFoods();
       }
// $http({
//     method: 'GET',
//     url: url
// }).then(function successCallback(data) {
//     $scope.foods = data.data;
// }, function errorCallback(data) {
//     alert("Connection Problem!");
// });







