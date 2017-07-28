angular.module('foodDeliveryApp')
    .directive('ordersList', function () {

        var template = '<div class="panel panel-default">\n' +
            '        <div class="panel-heading" role="tab" id="headingOne">\n' +
            '            <b>Tüm Siparişlerim</b>\n' +
            '            <ul class="list-group">\n' +
            '                <div ng-repeat="order in list track by $index" class="list-group-item">\n' +
            '                    {{$index+1}}. Sipariş:\n' +
            '                    <div ng-repeat="item in order.items track by $index" class="list-group-item">\n' +
            '                            <b>Yemek Adı:</b> {{item.food.name}}\n' +
            '                        <br><b>Restaurant Adı:</b> {{order.restaurant.name}}\n' +
            '                        <br><b>Sipariş Tarihi:</b> {{order.created_at}}\n' +
            '                        <br><b>Sipariş Ücreti:</b> {{item.price}}\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </ul>\n' +
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
