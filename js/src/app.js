var App = angular.module('App', []);

App.config(['$locationProvider', function($locationProvider){
	$locationProvider.html5Mode(true);
	
}]);

App.controller('AppController', ['$scope', function($scope){
    $scope.name = 'Skilltouch | Elegance In Motion';

    $scope.togglePage = function($event, $i){
    	$event.preventDefault();
    	$scope.tab = $i;
    }
}]);
