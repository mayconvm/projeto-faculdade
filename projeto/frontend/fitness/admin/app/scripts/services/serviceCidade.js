(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceCidade', ['$http', 'serviceRequestHttp', serviceCidade]);

  function serviceCidade($http, $serviceRequestHttp) {

    var url = 'cidade';
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
