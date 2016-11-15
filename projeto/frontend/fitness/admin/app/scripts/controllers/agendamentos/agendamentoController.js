'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('agendamentoController', ['$scope', 'serviceAgendamento', 'serviceContrato', '$stateParams', '$state', function($scope, $serviceAgendamento, $serviceContrato, $stateParams, $state) {
    
    if (!isLogin()) {
      return $state.go("login", {}, {reload: true});
    }

    // usuario
    $scope.usuario = dataUser();

      $scope.listItens = [{}];
      var service = $serviceAgendamento;

      function init() {
        service.getAll(function(data) {
          if ('length' in data && data.length) {
             $scope.listItens = data;
          }
        });
      };


      $scope.cancel = function __cancel(item) {
        service.update({"status": 0}, item.idAgendamento).then(function() {
          init();
        });
        console.log("-->cancel", item);
      };

      $scope.pay = function __pay(item) {
        // contrato
        $serviceContrato.getIdAgendamento(item.idAgendamento, function (data) {
          data = data[0];

          // paga o contrato
          $serviceContrato.update({
            status_pay: 1, // status de pago
            data_pagamento: moment().format("YYYY-MM-DD"),
            tipo_pagamento: 'PagSeguro'
          }, data.idContrato);

          // troca o status do agendamento para pago
          service.update({"status": 3}, item.idAgendamento).success(function() { init(); }); 
        });
      };

      // init page
      init();
  }]);
