angular.module('Application').controller('PrincipalController',['$scope','CalculService',function($scope,CalculService){

    $scope.hello = CalculService.add(4,5);
}]);