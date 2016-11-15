(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceAgendamento', ['$http', 'serviceRequestHttp', serviceAgendamento]);

  function serviceAgendamento($http, $serviceRequestHttp) {

    var url = 'agendamento';
    var configs = {}
    
    return {
      getAll: function (callback) {
        var usuario = dataUser();
        var filter = '';
        if (usuario.tipo == 2) {
          filter = '?idProfissional=' + usuario.idUsuario;
        } else {
          filter = '?idCliente=' + usuario.idUsuario;
        }

        return $serviceRequestHttp.get(url + filter, callback);
      },
      get: function (i, callback) { return $serviceRequestHttp.get(url + '/' + i, callback) },
      insert: function (data) { return $serviceRequestHttp.post(url, data, configs) },
      update: function (data, i) { return $serviceRequestHttp.put(url + '/' + i, data) },
      delete: function (i) {return $serviceRequestHttp.delete(url + '/' + i); }
    }
  }

}) ();
