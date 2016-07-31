var module = angular.module('Application');

module.service('monService', function(){
    var prenom = 'slava';
    var nom = 'pozdniakov';

    this.GetNomPrenom = function() {
        return nom + ' ' + prenom;
    }
});