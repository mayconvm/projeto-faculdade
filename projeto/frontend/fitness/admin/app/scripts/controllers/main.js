'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('MainCtrl', function($scope, $position, $state) {
    $scope.usuario = {};
    $scope.idUsuario = 0;

    var usuario = Cookies.getJSON('usuario');
    // verifica se o usuário está logado
    if (usuario) {
      $scope.idUsuario = usuario.idUsuario;
    } else {
      // caso o acesso esteja sendo feio sem o login
      $state.go("login", {}, {reload: true});
    }

  });
