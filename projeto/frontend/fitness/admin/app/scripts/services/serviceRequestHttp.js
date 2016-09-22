(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceRequestHttp', ['$http', serviceRequestHttp]);

  function serviceRequestHttp($http) {

    var configs = {};
    var urlApi = 'http://api.fitness/';
    
    return {
      get: function (url, callback) { 
        $http.get(urlApi + url, configs).then(function (response) {
          var data = response.data;

          // case error
          if (data.status) {
            console.error("Error", data);
            // todo: emitir uma lerta na tela com o texto que vem na messagem de error
          }

          // callback
          callback(data);
        });
      },
      put: function (data) { return $http.put(url, data, configs) },
      post: function (data, i) { return $http.post(url + i, data, configs) },
      delete: function (i) {return $http.delete(url + i, configs)}
    }
  }

}) ();

/**
 * Objeto padrão
 * {
 *   status: 1, // 1 ou 0
 *   error: "", // mensagem de erro
 *   data: [ //dados da requisição
 *     {
 *     }
 *   ]
 *   
 * }
 */
