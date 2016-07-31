//1 je récupère mon angular

var module = angular.module('Application');


//2 création ---- injection de dépendances donc pas de paramètres dans la fonction
module.filter('monFiltre',function(){
    //clausure: du coup on peut ajouter des paramètres
    return function(data) {
        return 'A'+data;
    };

});