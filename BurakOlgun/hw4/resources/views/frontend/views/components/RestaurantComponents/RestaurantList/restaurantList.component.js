angular.module('foodBoxApp')
    .component('restaurantList', {
        templateUrl: 'components/RestaurantComponents/RestaurantList/restaurantList.html',
        controller: restaurantListController
    });
            function restaurantListController($scope, DataService, $http) {
                $scope.newRestaurant = [];

                $scope.forwardNewRestaurantData = function (name, district, phone) {
                    $scope.newRestaurant.push({
                        'name': name,
                        'district': district,
                        'phone': phone
                    });
                };

                var newRestaurantRequest = {
                    method: 'POST',
                    url: 'http://localhost:8000//restaurant/new',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    data: $scope.newRestaurant
                };

                $scope.getRestaurants = function () {
                    DataService.getRestaurants(function (data) {
                        $scope.restaurants = data;
                    });
                };

                $scope.filler = $scope.getRestaurants();

                $scope.newRestaurantShower = function () {
                    $scope.tab5 = !$scope.tab5;
                };

                $scope.postNewRestaurant = function () {
                    $http(newRestaurantRequest).then(function (response) {
                        alert('New Restaurant Added');
                    }, function () {
                        alert("Connection Problem");
                    });
                }
            }