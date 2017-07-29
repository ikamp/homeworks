angular.module('foodDeliveryApp')
    .factory('MyHttpInterceptor', myHttpInterceptor);

function myHttpInterceptor($q, $window) {
    return {
        'responseError': function(rejection) {
            if (rejection.status == 401) {
                $window.location.href = '/login';
            }
            return $q.reject(rejection);
        }
    };
};
