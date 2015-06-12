angular.module('SellBirdFactory', ['ngResource'])
.factory('RestApiservice', ['$http','constantVal', function($http,constantVal) {

    return {
        getLogin: function(url, header, callback) {

            $http.get(constantRestApi.baseUrl + url, {
                headers: header
            }).
            success(function(data, status, headers, config) {
                    // this callback will be called asynchronously
                    // when the response is available
                    callback(data);
                }).
            error(function(data, status, headers, config) {

                callback({
                    "error": "Login Failed"
                });
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
        },
        getData: function(url, params, callback) {

            $http.get(constantVal.url + url+".json", {
                params: params
            }).
            success(function(data, status, headers, config) {
                    // this callback will be called asynchronously
                    // when the response is available
                    callback(data);
                }).
            error(function(data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
        },
        getPostData: function(url, params, postData, callback) {
            $http.post(constantVal.url + url+".json", postData, {
                params: params
            }).
            success(function(data, status, headers, config) {
                    // this callback will be called asynchronously
                    // when the response is available
                    callback(data);
                }).
            error(function(data, status, headers, config) {
                callback(null);
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });

            
        }

    };

}]);