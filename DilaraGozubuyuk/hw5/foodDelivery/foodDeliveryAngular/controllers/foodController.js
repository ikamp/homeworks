angular.module('foodDeliveryApp')
    .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
    //$scope.title = 'Yemekler';
    $scope.loading = false;
    $scope.flag = false;
    $scope.data = {	"item":[{"foodId":2,"quantity":98,"price":2},{"foodId":2,"quantity":89,"price":2}]}

        $scope.postOrders = function (data) {

            DataService.postOrders(data)
        }

    $scope.getPosts = function () {
        $scope.loading = true;
        DataService.getPosts(function (response) {
            $scope.loading = false;
            $scope.posts = response;
        });
    }

    $scope.getFoods = function () {
        $scope.loading = true;
        DataService.getFoods(function (response) {
            $scope.loading = false;
            $scope.posts = response;
        });
    }


}
