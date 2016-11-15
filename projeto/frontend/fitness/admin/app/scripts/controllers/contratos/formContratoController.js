'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formContratoController', ['$scope', 'serviceContrato', '$stateParams', 'serviceAgendamento', '$state', function($scope, $serviceContrato, $stateParams, $serviceAgendamento, $state) {
    if (!isLogin()) {
      return $state.go("login", {}, {reload: true});
    }
    
      var service = $serviceContrato;
      $scope.form = {};
      $scope.agendamento = {};

      function init() {
        if ('idAgendamento' in $stateParams && $stateParams.idAgendamento) {
          
          $serviceAgendamento.get($stateParams.idAgendamento, function(data) {
            console.log("-->GET formContratoController", data);
            $scope.agendamento = data;

            $scope.form.idAgendamento = data.idAgendamento;
            $scope.form.tipo_pagamento = 'PagSeguro';
            $scope.form.valor = data.duracaoAula * data.idProfissional.codProfissional.valorHoraAula;

          });
        }
      }

      $scope.save = function __save(form) {
        form.regras_personline = form.regras_personline? 1 : 0;
        console.log("-->", form);
        
        service.insert(form).success(function() {
          // troca o status do agendamento
          $serviceAgendamento.update({"status": 2}, form.idAgendamento).success(function() {
            $state.go("dashboard.agendamento", {}, {reload: true});
          });
        });
      };

      // init
      init();
}]);
