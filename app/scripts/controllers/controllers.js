'use strict';

/* Controllers */

var nuageControllers = angular.module('nuageControllers', []);


nuageControllers.controller('StructureController', ['$scope', '$http',
                                                    function ($scope, $http) {


	$http.get('backend/structure/menuPrincipal.json').success(function(data) {
		$scope.menu = data;
	});

	$scope.aProposLien = '#/index';
	$scope.contactLien = '#/index';

}]);

nuageControllers.controller('AcceuilController', ['$scope', '$http',
                                                  function ($scope, $http) {
	$scope.acceuilLien = '#/index';
	$scope.portfolioLien = '#/portfolio';
	$scope.astroLien = '#/index';
	$scope.videosLien = '#/index';
	$scope.voyagesLien = '#/index';
	$scope.galeriesLien = '#/index';

	$http.get('backend/acceuil/actu.json').success(function(data) {
		$scope.actu = data;
	});


}]);

nuageControllers.controller('PortfolioController', ['$scope', '$http',
                                                    function($scope, $http) {

	$http.get('backend/portfolio/portfolio.json').success(function(data) {
		$scope.portfolio = data;
	});


}]);



