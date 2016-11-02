'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('agendamentoController', ['$scope', 'serviceAgendamento', function($scope, $serviceAgendamento) {
      
      $scope.listItens = [{}];
      var service = $serviceAgendamento;

      function init() {
        service.getAll(function(data) {
          if ('length' in data && data.length) {
             $listItens = data;
          }
        });
      };


      // init page
      init();
  }]);
