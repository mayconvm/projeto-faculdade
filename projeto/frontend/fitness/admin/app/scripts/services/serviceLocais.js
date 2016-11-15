(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceLocal', ['$http', 'serviceRequestHttp', serviceLocal]);

  function serviceLocal($http, $serviceRequestHttp) {

    var url = 'locais';
    
    return {
      getAll: function (callback) { return $serviceRequestHttp.get(url, callback) },

      get: function (i) { return $serviceRequestHttp.get(url + i, configs) },
      insert: function (data) { return $serviceRequestHttp.put(url, data, configs) },
      update: function (data, i) { return $serviceRequestHttp.post(url + i, data, configs) },
      delete: function (i) {return $serviceRequestHttp.delete(url + i, configs)}
    }
  }

}) ();
