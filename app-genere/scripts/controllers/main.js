'use strict';

/**
 * @ngdoc function
 * @name nuageApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the nuageApp
 */
angular.module('nuageApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
