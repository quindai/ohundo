angular.module('ohundo', ['ngRoute'])
    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'partials/home.html'
            })
            .when('/agenda', {
                templateUrl: 'partials/agenda.html'
            })
            .when('/requisito', {
                  templateUrl: 'partials/requisito.html'
            })
            .when('/duracao', {
                templateUrl: 'partials/duracao.html'
            })
            .when('/publico', {
                templateUrl: 'partials/publico.html'
            })
            .when('/instrutor', {
                templateUrl: 'partials/instrutor.html'
            })
            .when('/localcurso', {
                templateUrl: 'partials/lcurso.html'
            })
            .when('/fale', {
                templateUrl: 'partials/fale.html'
            })
            .when('/inscricao', {
                templateUrl: 'partials/inscricao.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    }])
    .controller('NavCtrl', function ($scope) {
        $scope.setActive = function (item) {
            $scope.homeActive = '';
            $scope.agendaActive = '';
            $scope.requisitoActive = '';
            $scope.duracaoActive = '';
            $scope.publicoActive = '';
            $scope.instrutorActive = '';
            $scope.lcursoActive = '';
            $scope.faleActive = '';
            $scope[item + 'Active'] = 'active';
//            console.log(item);
        };
    }); //fim controller NavCtrl