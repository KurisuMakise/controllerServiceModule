<!DOCTYPE html>
<html>
    <head>
        <title>ajax</title>
        <meta charset="utf-8">
        <!--<link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="deroulant.css">-->
    </head>
    <body>
        <span>Hello world !</span>
        <div id="ajaxDiv" style="border:1px solid black;width:500px;height:500px;">
            En cours de chargement...
        </div>
        <!--<div id="question1" class="element" style="border:1px solid black;width:500px;height:25px;">
            question 1
        </div>
        <div id="question2" class="element" style="border:1px solid black;width:500px;height:25px;">
            question 2
        </div>
        <div id="question3" class="element" style="border:1px solid black;width:500px;height:25px;">
            question 3
        </div>
        <div id="question4" class="element" style="border:1px solid black;width:500px;height:25px;">
            question 4
        </div>-->
        <form>
            <input id="nom" name="nom" type="text">
            <input id="prenom" name="prenom" type="text">
            <!--<input id="age" name="age" type="number">-->
            <input id="validerGET" type="button" value="Valider GET">
            <input id="validerPOST" type="button" value="Valider POST">
        </form>

        <script type="text/javascript" src="./js/jquery/jquery-3.1.0.js"></script>
        <script>
            $(document).ready(function() {
                /*$('#question1').hover(function(){
                    $('#ajaxDiv').load("./ajax/page1.html #faq1",function(){
                        console.log('jquery chargé');
                    });
                });
                $('#question2').hover(function(){
                    $('#ajaxDiv').load("./ajax/page1.html #faq2",function(){
                        console.log('jquery chargé');
                    });
                });
                $('#question3').hover(function(){
                    $('#ajaxDiv').load("./ajax/page1.html #faq3",function(){
                        console.log('jquery chargé');
                    });
                });
                $('#question4').hover(function(){
                    $('#ajaxDiv').load("./ajax/page1.html #faq4",function(){
                        console.log('jquery chargé');
                    });
                });
                $('.element').on('mouseover',function(){
                    /*$('#ajaxDiv').load("./ajax/page1.html #"+$(this).attr('id'),{data:'madata'},function(){

                    });
                    $.get("./ajax/page1.html #"+$(this).attr('id'),{data:'madata'},function(){

                    });
                    //$.post();
                });*/

                $('#validerGET').click(function(){
                    console.log("bouton appuyé")
                    $.get('./ajax/page2get.php?nom='+$('#nom').val()+"&prenom="+$('#prenom').val(),function(data){
                        var donnees = JSON.parse(data);
                        console.log("Bonjour "+donnees.nom+" "+donnees.prenom+" !");
                        $('#ajaxDiv').html("Bonjour "+donnees.nom+" "+donnees.prenom+" !");
                    });
                });
                $('#validerPOST').click(function(){               
                    console.log("bouton appuyé")
                    var parametres = {
                        nom:$('#nom').val(),
                        prenom:$('#prenom').val()
                    };
                    $.post('./ajax/page2post.php',parametres,function(data){
                        //function callback une fois que l'on a envoyé au serveur(page2post.php) les paramètres du form
                        console.log(data);
                        var donnees = JSON.parse(data);
                        console.log("Bonjour "+donnees.nom+" "+donnees.prenom+" !");
                        $('#ajaxDiv').html("Bonjour "+donnees.nom+" "+donnees.prenom+" !");
                    });
                });

            });
        </script>
        <!--<script type="text/javascript" src="deroulant.js"></script>-->
    </body>
</html>