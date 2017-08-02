angular.module('foodDeliveryApp')
       .controller('UserController', userController);

function userController($scope, $http, $rootScope, DataService,$location,$timeout) {
	$scope.person = {
		firstName: 'Gizem',
		lastName: 'Sevinc'
	};


	$scope.postOrder = function() {
		DataService.postOrder($scope.basket,$scope.restaurantId, function (response) {
			//$location.path("/order/"+response.id);
            $rootScope.notify={
                messeage:'Tebrikler! Siparişiniz alındı,detay sayfasına yönlendiriliyorsunuz...'
            };
            $timeout(function () {
                $rootScope.notify = false;
                $scope.$apply(function() {
                    $location.path ('/order/' + response.id);
                });
            },5000)

		},function (error) {
			alert(error);
        })

	};
	$scope.time=5;
	var timer=function () {
        if ($scope.time>1){
            $scope.time-=1;
            $timeout(timer,1000);
        }
    }
            $timeout(timer,1000);
	$scope.emptyBasket=function () {
		$scope.basket=[];
    }
    $scope.$on('basket-updated',function (e,param) {
        var foodItem=param.item; flag=true;
        if(!$scope.basket ||$scope.basket.length===0)
        {
            $scope.basket = [];
        }
        if($scope.basket.length>0)
        {
            var copyBasket=angular.copy($scope.basket);
                angular.forEach(copyBasket,function (key,value) {
                if(key.id==foodItem.id){
                    key.quantity+=foodItem.quantity;
                    flag=false;
                }
            });
                if(flag)
                {
                    copyBasket.push(foodItem);
                }
            $scope.basket=copyBasket;
        }else{
            $scope.basket.push(foodItem);
        }

    });
    DataService.getOrders(function (response) {
    	$rootScope.orders=response;

    })
}
