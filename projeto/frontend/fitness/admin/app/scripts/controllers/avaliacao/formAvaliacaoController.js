'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formAvaliacaoController', ['$scope', 'serviceAvaliacao', 'serviceAgendamento', '$state', '$stateParams', function($scope, $serviceAvaliacao, $serviceAgendamento, $state, $stateParams) {
      
      $scope.agendamento = {};
      $scope.form = {
        "ponto": 12,
        "descAval": 'Qualquer coisa como descrição',
      };
      var service = $serviceAvaliacao;

      function init() {
        if ($stateParams.idAgendamento) {
          // busca o agendamento
          $serviceAgendamento.get($stateParams.idAgendamento, function (data) {
            $scope.agendamento = data;
            $scope.form.idCliente = data.idCliente.idUsuario;
            $scope.form.idProfissional = data.idProfissional.idUsuario;
            $scope.form.idAgendamento = data.idAgendamento;

            // verifica se alguma avaliaçaõ já foi feita
            service.getAgendamento($stateParams.idAgendamento, function (data) {
              if (data.length) {
                $scope.form = data[0];
                $scope.form.idCliente = data[0].idCliente.idUsuario;
                $scope.form.idProfissional = data[0].idProfissional.idUsuario;
                $scope.form.idAgendamento = data[0].idAgendamento.idAgendamento;
              }
            });
          });
          // preeche os campos
          console.log($stateParams);
        } else {
          $state.go("dashboard.agendamento", {}, {reload: true});
        }
      };

      $scope.save = function __save(form) {
        console.log("-->", form);
        var request;
        // salva a avaliação
        if (!form.idAvaliacao) {
          request = service.insert(form);
        } else {
          // update
          request = service.update(form, form.idAvaliacao);
        }

        // request
        request.success(function() {
          // troca o status do agendamento para pago
          $serviceAgendamento.update({"status": 4}, $scope.agendamento.idAgendamento).success(function() {
            $state.go("dashboard.agendamento", {}, {reload: true});
          }); 
        });;
      }

      // init page
      init();
  }]);
