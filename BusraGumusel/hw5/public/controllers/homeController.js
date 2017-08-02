angular.module('foodDeliveryApp')
       .controller('HomeController', homeController);

function homeController($scope, DataService) {
	$scope.tab = 'home';
}
