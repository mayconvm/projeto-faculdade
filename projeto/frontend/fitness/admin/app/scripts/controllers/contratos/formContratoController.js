'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formContratoController', ['$scope', 'serviceContrato', function($scope, $serviceContrato) {
      
      $scope.listItens = [{}];
      var service = $serviceContrato;

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
