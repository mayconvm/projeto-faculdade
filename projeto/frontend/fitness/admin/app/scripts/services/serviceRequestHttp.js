(function () {
'use strict';

  angular.module('sbAdminApp')

  .factory('serviceRequestHttp', ['$http', serviceRequestHttp]);

  function serviceRequestHttp($http) {

    // $http.defaults.headers.common['X-REQUESTED-WITH'] = 'xmlhttprequest';
    // $http.defaults.headers.put["Content-Type"] = "application/json";
    $http.defaults.headers.put["Content-Type"] = "application/x-www-form-urlencoded";
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    $http.defaults.headers.delete["Content-Type"] = "application/x-www-form-urlencoded";

    var configs = {
      headers: {
         // 'Content-Type': 'application/json',
         // 'Cache-Control': 'no-cache',
         // 'Content-Type': 'text/plain',
         // 'Content-Type': "application/x-www-form-urlencoded", // <--- pra usar post tem q ser esse
         // 'useXDomain': true,
         // 'withCredentials': true,
       },
    };
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
      put: function (url, data) {
        var form_data = '';
        for ( var key in data ) {
            form_data +=key + '=' + data[key] + '&';
        }
        
        $http({
            url: urlApi + url,
            method: 'PUT',
            headers: configs.headers,
            data: form_data
        });

        // return $http.post(urlApi + url, JSON.stringify(data), configs);
      },
      post: function (url, data) { 
        var form_data = '';
        for ( var key in data ) {
            form_data +=key + '=' + data[key] + '&';
        }

        $http({
            url: urlApi + url,
            method: 'POST',
            data: form_data
        });
      },
      delete: function (url) {
        return $http({
                url: urlApi + url,
                method: 'DELETE',
                headers: configs.headers,
            });
      }
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
