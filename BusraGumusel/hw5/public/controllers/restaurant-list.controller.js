angular.module('foodDeliveryApp')
       .controller('RestaurantListController', restaurantListController);

function restaurantListController($scope, DataService, $rootScope, $location) {
	$scope.title = 'Restoran Listesi';

	$scope.restaurants = [
		{"id":1,"name":"Dragos Restaurant","district":"Dragos","phoneNumber":"02155587963"},
		{"id":2,"name":"\u00c7i\u00e7ek Restaurant","district":"Yenik\u00f6y","phoneNumber":"02128637963"},
		{"id":3,"name":"\u00c7\u0131naralt\u0131 Mangal","district":"Ata\u015fehir","phoneNumber":"789652365"},
		{"id":4,"name":"Arbys","district":"Mecidiyek\u00f6y","phoneNumber":"7856325"}
	];

	$scope.getFoods = function(foodId) {
		$scope.loading = true;
		DataService.getFoods(foodId, function(response) {
			$scope.loading = false;
			$scope.foods = response;
			console.log(response);
		}, function(error) {
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
            for (i = 0; i < $scope.restaurantList.length; i++) {
                $('#aPopover' + i).popover();
            }
		})
    });
}
