angular.module('foodDeliveryApp')
    .directive('collapsePanel', function () {

        var template = '<div><span class="pull-right">Toplam: {{list.length}}</span></div>' +
            '<h1>{{title}}</h1>'+
            '<div class="panel-group" ng-repeat="restaurant in list track by $index" id="accordion" role="tablist" aria-multiselectable="true">' +
            '        <div class="panel panel-default">\n' +
            '            <div class="panel-heading" role="tab" id="headingOne">\n' +
            '                <h4 class="panel-title">\n' +
            '                    <div target="_self" role="button" data-toggle="collapse" data-parent="#accordion"\n' +
            '                       href="#collapse{{$index}}" aria-expanded="false" aria-controls="collapseOne">\n' +
            '                        <div id="restaurantPopover{{restaurant.id}}" class="popoverText"\n' +
            '                           data-content="\n' +
            '                            <button type=\'button\' class=\'btn btn-success btn-xs\'>\n' +
            '                                {{restaurant.serviceRank}}\n' +
            '                            </button>\n' +
            '                            <b> Servis Puani</b><br>\n' +
            '                            <button type=\'button\' class=\'btn btn-success btn-xs\'>\n' +
            '                                {{restaurant.tasteRank}}\n' +
            '                            </button>\n' +
            '                            <b> Lezzet Puani</b><br>\n' +
            '                            <button type=\'button\' class=\'btn btn-success btn-xs\'>\n' +
            '                                {{restaurant.speedRank}}\n' +
            '                            </button>\n' +
            '                            <b> Hiz Puani</b>\n' +
            '                            <br><b>Bolge: </b>{{restaurant.district}}\n' +
            '                            <br><b>Numara: </b> {{restaurant.phoneNumber}} <br>\n' +
            '                            <b>Adres: </b> {{restaurant.address}}"\n' +
            '                           data-trigger="hover" data-title="<b>{{restaurant.name}}</b>"\n' +
            '                           data-toggle="popover" data-placement="left" data-html="true">\n' +
            '                            {{restaurant.name}}\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '\n' +
            '\n' +
            '                    <a ng-href="#/restaurant/{{restaurant.id}}">\n' +
            '                        <i class="glyphicon glyphicon-chevron-right"></i>\n' +
            '                    </a>\n' +
            '                </h4>\n' +
            '\n' +
            '            </div>\n' +
            '            <div id="collapse{{$index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">\n' +
            '                <div class="panel-body">\n' +
            '                    <p>\n' +
            '                        <b>Servis Puani: </b>\n' +
            '                        {{restaurant.serviceRank}}\n' +
            '                    </p>\n' +
            '                    <p>\n' +
            '                        <b>Lezzet Puani: </b>\n' +
            '                        {{restaurant.tasteRank}}\n' +
            '                    </p>\n' +
            '                    <p>\n' +
            '                        <b>Hiz Puani: </b>\n' +
            '                        {{restaurant.speedRank}}\n' +
            '                    </p>\n' +
            '                    <p>\n' +
            '                        {{restaurant.district}}\n' +
            '                    </p>\n' +
            '                    <p>\n' +
            '                        {{restaurant.phoneNumber}}\n' +
            '                    </p>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </div>\n' +
            '    </div>';
        return {
            template: template ,
            scope: {
                title: "@",
                body: "@",
                list: "="
            },
            link: function (scope) {
            }
        };
    });
