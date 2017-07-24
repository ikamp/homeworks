<html ng-app="foodDeliveryApp">
<head>
    <meta charset="utf-8">
    <base href="">
    <title>Yemek Sepetim</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="header">

    <div class="alert alert-success alert-dismissible" ng-show="notify" id="alert-container">
        {{notify.message }} {{time/1000}}
    </div>

    <div class="row">
        <a href="/" class="logo">
            <img src="images/logo.png">
        </a>
        <div class="col-xs-4 col-xs-offset-4">
            <div class="input-group">
                <input type="text" class="form-control" ng-model="search" placeholder="Ara...">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button" ng-click="searchRestaurant=search">Ara</button>
                    </span>
            </div>
        </div>
    </div>
</div>

<div class="pull-left col-xs-3" ng-controller="UserController">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headUser">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" target="_self" data-parent="#accordion" href="#collapseUser"
                       aria-expanded="true" aria-controls="collapseUser">
                        {{person.firstName}} {{person.lastName}}
                    </a>
                </h4>
            </div>
            <div id="collapseUser" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headUser">
                <div class="panel-body">
                    <a href="http://ikamp.dev/#/orders">Siparişlerim</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headBasket">
                <h4 class="panel-title">
                    Yemek Sepetim
                    <button ng-click="emptyBasket()"><i class="glyphicon glyphicon-trash pull-right toolt"></i></button>
                </h4>
            </div>

            <div id="collapseBasket" role="tabpanel" aria-labelledby="headBasket">
                <div class="panel-body">
                    <h5 ng-if="!basket.foods.length">Sepetiniz henüz boş</h5>
                    <div ng-if="basket.foods.length > 0">
                        <ul>
                            <li ng-repeat="item in basket.foods track by $index">
                                <h4>{{item.name}} x {{item.quantity}}</h4>
                                <h4>Fiyat: {{item.price}}</h4>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-block btn-sm" ng-click="postOrder(basket)">Sipariş Ver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div ng-view></div>

<script type="text/javascript" src="lib/angular.min.js"></script>
<script type="text/javascript" src="lib/angular-route.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/bootstrap.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="services/dataService.js"></script>
<script type="text/javascript" src="restaurant/restaurant.component.js"></script>
<script type="text/javascript" src="controllers/homeController.js"></script>
<script type="text/javascript" src="controllers/restaurant-detail.controller.js"></script>
<script type="text/javascript" src="controllers/restaurant-list.controller.js"></script>
<script type="text/javascript" src="controllers/userController.js"></script>
<script type="text/javascript" src="controllers/orderController.js"></script>
<script type="text/javascript" src="controllers/ordersController.js"></script>

</body>
</html>
