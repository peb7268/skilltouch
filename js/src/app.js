var App = angular.module('App', []);

App.config(['$locationProvider', function($locationProvider){
	$locationProvider.html5Mode(true);
	
}]);

App.controller('AppController', [function(){
    this.name = 'Skilltouch | Elegance In Motion';
}]);
