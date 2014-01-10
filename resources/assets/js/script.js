angular.module('Backend', ['ngRoute', 'ui.bootstrap'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider.when('/', {
            templateUrl: '/index',
            controller: MainController,
            resolve: {}
        });
        $routeProvider.when('/login', {
            templateUrl: '/security/login',
            controller: SecurityController,
            resolve: {}
        });

        // configre html5 to get links working on jsfiddle
        $locationProvider.html5Mode(true);
    });

function MainController($scope, $route, $routeParams, $location) {
    $scope.name = 'Main Controller';
}

function SecurityController($scope, $route, $routeParams, $location) {
    $scope.name = 'Security Controller';
}