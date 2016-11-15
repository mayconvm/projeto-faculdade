'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formUsuarioController', ['$scope', 'serviceUsuario', '$stateParams', '$state', function($scope, $serviceUsuario, $stateParams, $state) {
      var service = $serviceUsuario;
      $scope.usuario = dataUser();

      var type;
      var PROFISSIONAL = 2;
      var CLIENTE = 1;
      var action = 'insert';

      $scope.submitForm = function(form) {
        console.log("FORM", form);
        var request = undefined;

        // caso a senha não esteja preechida
        if (!form.senha || !form.resenha || (form.senha !== form.resenha)){
          return alert("As senhas estão vazias ou diferente.");
        }

        if (!form.email){
          return alert("E-mail obrigatório.");
        }

        if (!form.idUsuario) {
          // inser element
          request = service.insert(form);
        } else {
          // update
          request = service.update(form, form.idUsuario);
        }

        // request
        request.success(function() {
          if ($scope.usuario) {
            // redireciona para página de listagem
          } else {
            $state.go("login");
          }
        });
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
            if (data.dataNascimento) {
              data.data_nascimento = moment(data.dataNascimento.timestamp * 1000).format("D/M/Y");
            }

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
            "data_nascimento": "1989-04-23",
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
            "email": "cliente@cliente.com",
            "senha": "cliente",
            "resenha": "cliente",
            "anexo_graduacao": "https://ae01.alicdn.com/kf/HTB1RCGtLpXXXXXiaFXXq6xXFXXXw/Sports-font-b-fitness-b-font-models-Andreia-Brazier-dumbbells-font-b-gyms-b-font-athletic.jpg",
            "anexo_avaliacao": "https://ae01.alicdn.com/kf/HTB1RCGtLpXXXXXiaFXXq6xXFXXXw/Sports-font-b-fitness-b-font-models-Andreia-Brazier-dumbbells-font-b-gyms-b-font-athletic.jpg",
          };
        }

      };


      // init page
      init();
  }]);
