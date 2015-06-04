'use strict';

/* App Module */

var nuageApp = angular.module('nuageApp', [
                                           'ngRoute',
                                           'nuageControllers'    
                                           ]);

nuageApp.config(['$routeProvider',
                 function($routeProvider) {
	$routeProvider.
	when('/index', {
		templateUrl: 'views/acceuil.html',
		controller: 'IndexController'
	}).
	when('/portfolio', {
		templateUrl: 'views/portfolio.html',
		controller: 'PortfolioController'
	}).
	when('/carousel', {
		templateUrl: 'views/portfolio.html',
		controller: 'PortfolioController'
	}).
	otherwise({
		redirectTo: '/index'
	});
}]);
