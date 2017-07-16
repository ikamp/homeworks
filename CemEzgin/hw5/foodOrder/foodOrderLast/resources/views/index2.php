<html ng-app="foodDeliveryApp">
<head>
    <title>Sample "Hello, World" Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Online Yemek Sistemi</h2>
        </div>
    </div>
    <div ng-repeat="name in buttons track by $index">
        <button class="btn btn-primary"
                ng-click="control=!control">{{name}}</button>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <restaurant-list></restaurant-list>
        </div>


        <div class="col-xs-10 col-xs-offset-1">
            <div id="food" class="row" ng-controller="FoodController">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 ng-bind="title"></h4>
                        <button ng-click="getPosts()" class="btn btn-primary">Get</button>
                    </div>
                    <div class="panel-body">
                        <p ng-if="loading">Yükleniyor...</p>
                        Post Listesi
                        <ul>
                            <li ng-repeat="post in posts track by $index">
                                {{$index + 1}}.
                                {{post.title}}
                                {{post.body}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<script type="text/javascript" src="../../public/js/angular-example/lib/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
<script type="text/javascript" src="../../public/js/angular-example/app.js"></script>
<script type="text/javascript" src="../../public/js/angular-example/services/dataService.js"></script>
<script type="text/javascript" src="../../public/js/angular-example/restaurant/restaurant.component.js"></script>
<script type="text/javascript" src="../../public/js/angular-example/controllers/foodController.js"></script>
</body>
</html>
