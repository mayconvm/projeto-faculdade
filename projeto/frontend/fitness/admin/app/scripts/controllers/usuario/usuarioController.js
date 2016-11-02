'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('usuarioController', ['$scope', 'serviceUsuario', function($scope, $serviceUsuario) {
      
      $scope.listItens = [];
      var service = $serviceUsuario;

      function init() {
        service.getAll(function(data) {
          if ('length' in data && data.length) {
             $scope.listItens = data;
          }
        });
      };


      $scope.delete = function (index, item) {
        if (confirm('Realmente deseja excluir?')) {
          service.delete(item.idUsuario);
          $scope.listItens.splice(index, 1);
        }
      };  


      // init page
      init();
  }]);
