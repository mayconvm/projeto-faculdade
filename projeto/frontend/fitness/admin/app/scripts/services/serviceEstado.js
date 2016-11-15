(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceEstado', ['$http', 'serviceRequestHttp', serviceEstado]);

  function serviceEstado($http, $serviceRequestHttp) {

    var url = 'estado';
    var configs = {}
    
    return {
      getAll: function (callback) { return $serviceRequestHttp.get(url, callback) },

      get: function (i, callback) { return $serviceRequestHttp.get(url + '/' + i, callback) },
      insert: function (data) { return $serviceRequestHttp.post(url, data, configs) },
      update: function (data, i) { return $serviceRequestHttp.put(url + '/' + i, data) },
      delete: function (i) {return $serviceRequestHttp.delete(url + '/' + i); }
    }
  }

}) ();
