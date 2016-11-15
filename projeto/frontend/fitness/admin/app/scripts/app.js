'use strict';
/**
 * @ngdoc overview
 * @name sbAdminApp
 * @description
 * # sbAdminApp
 *
 * Main module of the application.
 */
angular
  .module('sbAdminApp', [
    'oc.lazyLoad',
    'ui.router',
    'ui.bootstrap',
    'angular-loading-bar',
    // 'ngCookies',
  ])
  .config(['$stateProvider','$urlRouterProvider','$ocLazyLoadProvider','$httpProvider', function ($stateProvider,$urlRouterProvider,$ocLazyLoadProvider, $httpProvider) {

    $httpProvider.defaults.headers.common = {};
    $httpProvider.defaults.headers.post = {};
    $httpProvider.defaults.headers.delete = {};
    $httpProvider.defaults.headers.put = {};
    $httpProvider.defaults.headers.patch = {};
    
    $ocLazyLoadProvider.config({
      debug:false,
      events:true,
    });

    $urlRouterProvider.otherwise('/dashboard/home');

    $stateProvider
      .state('dashboard', {
        url:'/dashboard',
        controller: function($scope) {
          $scope.usuario = Cookies.getJSON("usuario");
          // console.log($scope.usuario);
        },
        templateUrl: 'views/dashboard/main.html',
        resolve: {
            loadMyDirectives:function($ocLazyLoad){
                return $ocLazyLoad.load(
                {
                    name:'sbAdminApp',
                    files:[
                    'scripts/directives/header/header.js',
                    'scripts/directives/header/header-notification/header-notification.js',
                    'scripts/directives/sidebar/sidebar.js',
                    'scripts/directives/sidebar/sidebar-search/sidebar-search.js',
                    'scripts/filters/datePHP.js',
                    'scripts/services/serviceRequestHttp.js',
                    'scripts/services/serviceUsuario.js',
                    'scripts/services/serviceAvaliacao.js',
                    'scripts/services/serviceAgendamento.js',
                    'scripts/services/serviceCidade.js',
                    'scripts/services/serviceContrato.js',
                    'scripts/services/serviceLocalidade.js',
                    'scripts/services/serviceCidade.js',
                    'scripts/controllers/avaliacao/avaliacaoController.js',
                    'scripts/controllers/avaliacao/formAvaliacaoController.js',
                    'scripts/controllers/usuario/usuarioController.js',
                    'scripts/controllers/usuario/formUsuarioController.js',
                    'scripts/controllers/contratos/contratoController.js',
                    'scripts/controllers/contratos/formContratoController.js',
                    'scripts/controllers/agendamentos/agendamentoController.js',
                    'scripts/controllers/agendamentos/formAgendamentoController.js',
                    ]
                }),
                $ocLazyLoad.load(
                {
                   name:'toggle-switch',
                   files:["bower_components/angular-toggle-switch/angular-toggle-switch.min.js",
                          "bower_components/angular-toggle-switch/angular-toggle-switch.css"
                      ]
                }),
                $ocLazyLoad.load(
                {
                  name:'ngAnimate',
                  files:['bower_components/angular-animate/angular-animate.js']
                })
                $ocLazyLoad.load(
                {
                  name:'ngCookies',
                  files:['bower_components/angular-cookies/angular-cookies.js']
                })
                $ocLazyLoad.load(
                {
                  name:'ngResource',
                  files:['bower_components/angular-resource/angular-resource.js']
                })
                $ocLazyLoad.load(
                {
                  name:'ngSanitize',
                  files:['bower_components/angular-sanitize/angular-sanitize.js']
                })
                $ocLazyLoad.load(
                {
                  name:'ngTouch',
                  files:['bower_components/angular-touch/angular-touch.js']
                })
            }
        }
    })
      .state('dashboard.home',{
        url:'/home',
        controller: 'MainCtrl',
        templateUrl:'views/dashboard/home.html',
        resolve: {
          loadMyFiles:function($ocLazyLoad) {
            return $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
              'scripts/controllers/main.js',
              'scripts/directives/timeline/timeline.js',
              'scripts/directives/notifications/notifications.js',
              'scripts/directives/chat/chat.js',
              'scripts/directives/dashboard/stats/stats.js'
              ]
            })
          }
        }
      })
      .state('dashboard.form',{
        templateUrl:'views/form.html',
        url:'/form'
    })
      .state('dashboard.blank',{
        templateUrl:'views/pages/blank.html',
        url:'/blank'
    })
      .state('login',{
        controller: 'loginController',
        templateUrl:'views/pages/login.html',
        url:'/login',
        resolve: {
          loadMyFiles:function($ocLazyLoad) {
            return $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/controllers/loginController.js',
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceUsuario.js',
              ]
            })
          }
        }
      })
      .state('dashboard.chart',{
        templateUrl:'views/chart.html',
        url:'/chart',
        controller:'ChartCtrl',
        resolve: {
          loadMyFile:function($ocLazyLoad) {
            return $ocLazyLoad.load({
              name:'chart.js',
              files:[
                'bower_components/angular-chart.js/dist/angular-chart.min.js',
                'bower_components/angular-chart.js/dist/angular-chart.css'
              ]
            }),
            $ocLazyLoad.load({
                name:'sbAdminApp',
                files:['scripts/controllers/chartContoller.js']
            })
          }
        }
    })
      .state('dashboard.table',{
        templateUrl:'views/table.html',
        url:'/table'
    })
      .state('dashboard.panels-wells',{
          templateUrl:'views/ui-elements/panels-wells.html',
          url:'/panels-wells'
      })
      .state('dashboard.buttons',{
        templateUrl:'views/ui-elements/buttons.html',
        url:'/buttons'
    })
      .state('dashboard.notifications',{
        templateUrl:'views/ui-elements/notifications.html',
        url:'/notifications'
    })
      .state('dashboard.typography',{
       templateUrl:'views/ui-elements/typography.html',
       url:'/typography'
   })
      .state('dashboard.icons',{
       templateUrl:'views/ui-elements/icons.html',
       url:'/icons'
   })
      .state('dashboard.grid',{
       templateUrl:'views/ui-elements/grid.html',
       url:'/grid'
   })




   .state('dashboard.avaliacao',{
      controller:'avaliacaoController',
      templateUrl:'views/avaliacao/index.html',
      url:'/avaliacao',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceAvaliacao.js',
                'scripts/controllers/avaliacao/avaliacaoController.js',

              ]
          })
        }
      }
   })
   .state('dashboard.avaliacao_edit',{
      controller:'formAvaliacaoController',
      templateUrl:'views/avaliacao/form.html',
      url:'/avaliacao_edit/:idAgendamento',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceAvaliacao.js',
                'scripts/services/serviceAgendamento.js',
                'scripts/controllers/avaliacao/formAvaliacaoController.js',
              ]
          })
        }
      }
   })

   //////////////
   // usuários //
   //////////////

   .state('dashboard.usuarios',{
      controller:'usuarioController',
      templateUrl:'views/usuario/index.html',
      url:'/usuario',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceUsuario.js',
                'scripts/services/serviceCidade.js',
                'scripts/controllers/usuario/usuarioController.js',
              ]
          })
        }
      }
   })

   .state('dashboard.form_usuario',{
      controller:'formUsuarioController',
      templateUrl:'views/usuario/form.html',
      url:'/usuario/form/:idUsuario',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceUsuario.js',
                'scripts/controllers/usuario/formUsuarioController.js',
              ]
          })
        }
      }
   })



   //////////////////
   // Agendamentos //
   //////////////////

   .state('dashboard.agendamento',{
      url:'/agendamentos',
      controller:'agendamentoController',
      templateUrl:'views/agendamentos/index.html',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceAgendamento.js',
                'scripts/services/serviceContrato.js',
                'scripts/controllers/agendamentos/agendamentoController.js',
              ]
          })
        }
      }
   })

   .state('dashboard.form_agendamento',{
      controller:'formAgendamentoController',
      templateUrl:'views/agendamentos/form.html',
      url:'/agendamentos/form/:idAgendamento',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceAgendamento.js',
                'scripts/services/serviceUsuario.js',
                'scripts/services/serviceLocalidade.js',
                'scripts/services/serviceCidade.js',
                'scripts/controllers/agendamentos/formAgendamentoController.js',
              ]
          })
        }
      }
   })


   //////////////
   // contrato //
   //////////////

   .state('dashboard.contrato',{
      controller:'contratoController',
      templateUrl:'views/contratos/index.html',
      url:'/contratos',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceContrato.js',
                'scripts/controllers/contratos/contratoController.js',
              ]
          })
        }
      }
   })

   .state('dashboard.form_contrato',{
      controller:'formContratoController',
      templateUrl:'views/contratos/form.html',
      url:'/contratos/form/:idAgendamento',
      resolve: {
        loadMyFile:function($ocLazyLoad) {
          $ocLazyLoad.load({
              name:'sbAdminApp',
              files:[
                'scripts/services/serviceRequestHttp.js',
                'scripts/services/serviceContrato.js',
                'scripts/services/serviceAgendamento.js',
                'scripts/controllers/contratos/formContratoController.js',
              ]
          })
        }
      }
   })

  }])
.filter('datePHP', function() {
  return function (input, opt) {
    if (!input || !("timestamp" in input) || !input.timestamp) {
      return;
    }

    var timeStamp = input.timestamp * 1000;
    var dateTimeStamp = new Date(timeStamp);

    // format
    var format = opt || "D/M/Y"

    return moment(dateTimeStamp).format(format);
  }

});

function dataUser() {
  return Cookies.getJSON("usuario");
}

function isLogin() {
  return dataUser()? true : false;
}
