angular.module('Application').controller('secondController',['$scope','$rootScope',function($scope,$rootScope){
    $scope.hello = 'je suis dans le second';
        $rootScope.autreV = 'dddd';
}]);