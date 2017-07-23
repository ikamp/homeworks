<html ng-app="foodDeliveryApp">
<head>
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
</head>
<body>
<div>
    <button class="ui orange button" ng-click="getPosts()" >
        Get
    </button>
    <button class="ui orange button" ng-click="$ctrl.show = !false" >
        Restorant Listesi
    </button>
    <button class="ui green button" ng-click="$ctrl.show = !true">
        Siparislerim
    </button>
</div>
<div ng-hide="$ctrl.show">
    <order-list></order-list>
</div>
<div ng-show="$ctrl.show" >
    <restaurant-list></restaurant-list>
</div>

<script type="text/javascript" src="../../public/js/foodOrderAngular/lib/angular.min.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/controller/rootController.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/app.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/dataService.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/restaurant/restaurant.component.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/order/order.component.js"></script>
<script type="text/javascript" src="../../public/js/foodOrderAngular/controller/foodController.js"></script>
</body>
</html>