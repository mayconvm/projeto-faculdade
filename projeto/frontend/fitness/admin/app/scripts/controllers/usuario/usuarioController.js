'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('usuarioController', ['$scope', 'serviceUsuario', '$state', 'serviceCidade', function($scope, $serviceUsuario, $state, $serviceCidade) {

    if (!isLogin()) {
      return $state.go("login", {}, {reload: true});
    }

      
      $scope.listItens = [];
      var service = $serviceUsuario;

      function init() {
        service.getAll(function(data) {
          if ('length' in data && data.length) {
             $scope.listItens = data;
          }
        });

        $serviceCidade.getAll(function(data) {
          if ('length' in data && data.length) {
            $scope.listCity = data;
          }
        })
      };

      $scope.delete = function (index, item) {
        if (confirm('Realmente deseja excluir?')) {
          service.delete(item.idUsuario);
          $scope.listItens.splice(index, 1);
        }
      };  

      $scope.accept = function ($index, form) {
        // abrir a página para de agendamento com o profissional selecionado
        console.log($index, form);
        Cookies.set("idProfissional", form.idUsuario);
        
        // redireciona para página de listagem
        $state.go("dashboard.form_agendamento");
      };

      // init page
      init();
  }]);
