'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('customersController', ['$scope', 'serviceUsers', function($scope, $serviceUsers) {
      
      $scope.listItens = [{}];
      var service = $serviceUsers;

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