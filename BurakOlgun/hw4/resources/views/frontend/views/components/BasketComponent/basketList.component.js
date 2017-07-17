angular.module('foodBoxApp')
    .component('basketlist',{
        templateUrl:'components/BasketComponent/basketlist.html',
        controller: function basketListController($scope, $http) {
            $scope.ordersOnBasket = [] ;

            var newOrderRequest = {
                method: 'POST',
                url: 'http://localhost:8000/neworder',
                headers: {
                    'Content-Type': 'application/json'
                },

                data:$scope.ordersOnBasket
            };

            $scope.postTheOrders = function() //this block post the datas
            {
                $http(newOrderRequest).then(function(response){
                    console.log("food list posted!");
                }, function(){
                    alert("Connection Problem");
                });
            };

            $scope.$on('baskedChanged', function(event, args) {
                console.log(args);
                console.log(args[0].name);
                $scope.ordersOnBasket.push({
                    'userId':1,
                    'foodId': args[0].id,
                    'name': args[0].name,
                    'price': args[0].price,
                    'quantity': args[0].quantity
                });
            });

            $scope.deleteClickedItem = function(index)
            {
                $scope.ordersOnBasket.splice(index,1);
            }
        }
    });
