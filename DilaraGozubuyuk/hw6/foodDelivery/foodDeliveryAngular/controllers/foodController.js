angular.module('foodDeliveryApp')
    .controller('FoodController', foodController);

function foodController($scope, $http, DataService) {
    //$scope.title = 'Yemekler';
    $scope.loading = false;
    $scope.flag = false;
    //$scope.data = {"item": [{"foodId": 2, "quantity": 98, "price": 2}, {"foodId": 2, "quantity": 89, "price": 2}]}
    $scope.variable = 1;
    $scope.orders = {"item": []};
    $scope.quantity;

    $scope.addBasket = function ($foodId, $foodName, $foodPrice) {
        document.getElementById("panelBody").innerHTML += $foodName + " " + " " + $foodPrice + " " + " " + "<input  type=\"number\" id='number'>" + " " + "<button ng-click='$scope.quantity = document.getElementById(\"number\").value'>+</button>" + "<br>";
        $scope.orders.item.push({
            foodId: $foodId,
            quantity: 1,
            price: $foodPrice

        })

    }

    $scope.sendOrder = function () {
        console.log(JSON.stringify($scope.orders));
        $scope.postOrder(JSON.stringify($scope.orders));
    }

    $scope.postOrders = function ($data) {
        DataService.postOrders($data, function (result) {
            console.log(result);
        })
    }

    $scope.postOrder = function ($data) {
        DataService.postOrder($data, function (result) {
            console.log(result);
        })
    }

    $scope.getPosts = function () {
        $scope.loading = true;
        DataService.getPosts(function (response) {
            $scope.loading = false;
            $scope.restaurants = response;
        });
    }


}
