angular.module('Application').controller('principalController',['$scope','calculService',function($scope,calculService){
  
    //$scope.hello = monService.GetNomPrenom(); 
    $scope.hello = calculService.add(4,5);
}]);