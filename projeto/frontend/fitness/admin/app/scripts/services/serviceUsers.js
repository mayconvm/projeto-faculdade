(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceUsers', ['$http', 'serviceRequestHttp', serviceUsers]);

  function serviceUsers($http, $serviceRequestHttp) {

    var url = 'users';
    
    return {
      getAll: function (callback) { return $serviceRequestHttp.get(url, callback) },

      get: function (i) { return $serviceRequestHttp.get(url + i, configs) },
      insert: function (data) { return $serviceRequestHttp.put(url, data, configs) },
      update: function (data, i) { return $serviceRequestHttp.post(url + i, data, configs) },
      delete: function (i) {return $serviceRequestHttp.delete(url + i, configs)}
    }
  }

}) ();
