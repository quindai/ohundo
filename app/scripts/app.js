'use strict';

/**
 * @ngdoc overview
 * @name paginacursoApp
 * @description
 * # paginacursoApp
 *
 * Main module of the application.
 */
angular
  .module('paginacursoApp', [
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
