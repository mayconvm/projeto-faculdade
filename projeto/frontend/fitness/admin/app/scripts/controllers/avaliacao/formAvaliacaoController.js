'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formAvaliacaoController', ['$scope', 'serviceAvaliacao', function($scope, $serviceAvaliacao) {
      
      $scope.listItens = [{}];
      var service = $serviceAvaliacao;

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
