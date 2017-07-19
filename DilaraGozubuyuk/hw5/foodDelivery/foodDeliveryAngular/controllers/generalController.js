angular.module('foodDeliveryApp')
    .controller('GeneralController',generalController);

function generalController($scope)
{
    $scope.flag=false;
    $scope.array=["food","restaurant"];
}