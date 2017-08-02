angular.module('foodDeliveryApp')
    .directive('panel', function () {

        var template =
            '   <div class="panel-group" ng-repeat="restaurant in list  | filter: search track by $index" id="accordion"' +
            '        role="tablist" aria-multiselectable="true">\n' +
            '        <div class="panel panel-default">\n' +
            '            <div class="panel-heading" role="tab" id="headingOne">\n' +
            '                <h4 class="panel-title">\n' +
            '                    <a target="_self" role="button" data-toggle="collapse" data-parent="#accordion"\n' +
            '                       href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapseOne">\n' +
            '                        <a id="restaurantPopover{{restaurant.id}}" class="popoverText" title="{{restaurant.name}}"\n' +
            '                           data-content="\n' +
            '                           <button type=\'button\' class=\'btn btn-success btn-xs\'>{{restaurant.serviceRank}}</button>\n' +
            '                                <b> Service Rate</b><br>\n' +
            '                           <button type=\'button\' class=\'btn btn-success btn-xs\'>{{restaurant.tasteRank}}</button>\n' +
            '                                <b> Taste Rate</b><br>\n' +
            '                           <button type=\'button\' class=\'btn btn-success btn-xs\'>{{restaurant.speedRank}}</button>\n' +
            '                                <b> Speed Rate</b>\n' +
            '                           <br><b>District: </b>{{restaurant.district}}\n' +
            '                           <br><b>Number: </b> {{restaurant.phoneNumber}} <br>\n' +
            '                           <b>Address: </b> {{restaurant.address}}" data-trigger="hover"\n' +
            '                           data-toggle="popover" data-placement="top" data-html="true">\n' +
                                        '{{restaurant.name}}\n' +
            '                        </a>\n' +
            '                    </a>\n' +
            '                    <a ng-href="#/restaurant/{{restaurant.id}}">\n' +
            '                        <i class="glyphicon glyphicon-chevron-right"></i>\n' +
            '                    </a>\n' +
            '                </h4>\n' +
            '            </div>\n' +
            '            <div id="collapse{{$index}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">\n' +
            '                <div class="panel-body">\n' +
            '                    <p>{{restaurant.district}}</p>\n' +
            '                    <p> {{restaurant.phoneNumber}}</p>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </div>\n' +
            '    </div>'

        return {
            template: template,
            scope: {
                title: '=',
                body: '@',
                list: '=',
            },
            link: function (scope) {

            }
        }
    });