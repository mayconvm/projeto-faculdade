'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formUsuarioController', ['$scope', 'serviceUsuario', '$stateParams', function($scope, $serviceUsuario, $stateParams) {
      var service = $serviceUsuario;

      var type;
      var PROFISSIONAL = 2;
      var CLIENTE = 1;
      var action = 'insert';

      $scope.submitForm = function(form) {
        console.log("FORM", form);

        if (!form.idUsuario) {
          // inser element
          service.insert(form);
        } else {
          // update
          service.update(form, form.idUsuario);
        }

      };
      

      function init() {
        if ('idUsuario' in $stateParams && $stateParams.idUsuario) {
          
          service.get($stateParams.idUsuario, function(data) {

            // algumas converções
            //////////
            // type //
            //////////
            if (!data.codCliente) {
              data.type = PROFISSIONAL
              delete data.codCliente;
            } else {
              data.type = CLIENTE
              delete data.codProfissional;
            }
            
            type = data.type;

            /////////////////////
            // data_nascimento //
            /////////////////////
            data.data_nascimento = moment(data.dataNascimento.timestamp * 1000).format("D/M/Y");

            ////////////////////
            //disponibilidade //
            ////////////////////
            if (!data.codDisponibilidade) {
              delete data.codDisponibilidade;
            }


            $scope.form = data;
          });
          console.log("stateParams", $stateParams);

        } else {
          $scope.form = {
            "type": 1,
            "nome": "Maycon Vinicius Teste",
            "pagseguro": "mayconvm@pagseguro.com.br",
            "telefone": "(31) 98639-0966",
            "sexo": "1",
            "data_nascimento": "23/04/1989",
            "graduacao": 1,
            "especialidade": "Especialista em especialidades",
            "valor_hora_aula": 20,
            "cep": "31.540-360",
            "endereco": "Rua da casa da mãe joana",
            "complemento": "Na casa de portão azul",
            "numero": "20",
            "bairro": "Qualquer Bairro",
            "UF": 1,
            "cidade": 1,
          };
        }

      };


      // init page
      init();
  }]);
