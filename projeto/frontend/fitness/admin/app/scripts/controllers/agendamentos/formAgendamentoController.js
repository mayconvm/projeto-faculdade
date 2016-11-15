'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the sbAdminApp
 */
angular.module('sbAdminApp')
  .controller('formAgendamentoController', ['$scope', 'serviceAgendamento', 'serviceUsuario', 'serviceLocalidade', 'serviceCidade', '$state', '$stateParams', function($scope, $serviceAgendamento, $serviceUsuario, $serviceLocalidade, $serviceCidade, $state, $stateParams) {

      // dados do usuário
      $scope.usuario = dataUser();

      $scope.idProfissional = Cookies.get("idProfissional");
      // Cookies.remove("idProfissional");
      
      $scope.listItens = [{}];
      var service = $serviceAgendamento;

      $scope.form = {
        // "id_cliente": '',
        // "id_profissional": '',
        "especialidade": 'Qualquer especialidade',
        "data": '2016-12-23',
        "hora": '11:11',
        "duracao_aula": 1,
        "localidade": {
          "observacoes": '',
          "cep": '112233',
          "endereco": 'Rua Qualquer',
          "numero": 11,
          "bairro": 'Qualquer Bairro',
          "complemento": 'Qualquer lugar',
          "UF": 1,
          "cidade": 1,
        }
      };

      function init() {
        $scope.listUsers = [];
        $scope.listPlaces = [];
        $scope.listCity = [];
        $scope.listState = [];

        // localidades
        $serviceLocalidade.getAll(function(data) {
          if ('length' in data && data.length) {
             $scope.listPlaces = data;
          }
        });

        // cidade e estado
        $serviceCidade.getAll(function(data) {
          if ('length' in data && data.length) {
             $scope.listCity = data;

             var ids = [];
             for (var i in data) {
              if (ids.indexOf(data[i].codEstado.idestado) == -1) {
                $scope.listState.push(data[i].codEstado);
                ids.push(data[i].codEstado.idestado);
              }
             }
          }
        });

        // busca agendamento
        $serviceUsuario.get($scope.idProfissional, function(data) {
          $scope.profissional = data;

          $scope.form.idProfissional = data.idUsuario;
          $scope.form.idCliente = $scope.usuario.idUsuario;
        });
      };

      $scope.save = function __save(form) {
        console.log("->", form);
        var request = undefined;

        if (!form.idLocalDefinido) {
          // inser element
          request = service.insert(form);
        } else {
          // update
          request = service.update(form, form.idLocalDefinido);
        }

        // request
        request.success(function() {
          // redireciona para página de listagem
          $state.go("dashboard.agendamento");
        });
      };

      // init page
      init();
  }]);
