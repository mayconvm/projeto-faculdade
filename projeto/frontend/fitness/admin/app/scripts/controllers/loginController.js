'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('loginController', ['$scope', '$state', 'serviceUsuario', function($scope, $state, $serviceUsuario) {
    $scope.usuario = {};
    $scope.idUsuario = 0;

    var usuario = Cookies.getJSON('usuario');
    // verifica se o usuário está logado
    if (usuario) {
      // caso o acesso esteja sendo feio sem o login
      // $state.go("dashboard.home", {}, {reload: true});
      Cookies.remove('usuario');
    }

    $scope.login = function __login (form){
      // verifica se o usuário existe
      $serviceUsuario.login(form.login, form.password, function(data) {
        // pega o usuário
        if (data.length) {
          // gravar em cookie
          Cookies.set('usuario', data[0]);
          // redirecionar o usúario para dashboard
          $state.go("dashboard.home", {}, {reload: true});
        }
      });
    };

  }]);
