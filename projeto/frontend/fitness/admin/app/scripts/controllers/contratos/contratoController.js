'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('contratoController', ['$scope', 'serviceContrato', '$state', function($scope, $serviceContrato, $state) {

    if (!isLogin()) {
      return $state.go("login", {}, {reload: true});
    }
      
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
