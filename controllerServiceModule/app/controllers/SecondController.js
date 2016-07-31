angular.module('Application').controller('SecondController',['$scope','CalculLocService',function($scope,CalculLocService){

    $scope.hello2 = CalculLocService.mult(4,5);
}]);