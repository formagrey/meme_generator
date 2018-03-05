$(document).ready(function(){
    var src = $("#imgici img").attr('src');
    $("#pasVu").val(src);

    $(".img").click(function(){
        $("#imgici").html();
    });
    $(".imghover").click(function(){
        var src = $(this).attr('src');
        //$("#imgici").html(src);
        $("#imgici").html("<img name='fichier' src=\'"+src+"\'>");
        window.location.hash = $(this).attr('src'); // on récupère l'attribut pour l'inecter dans la barre d'adresse
        $("#pasVu").val(src);
    });
//fonction bouton grisé + test text up
     var checkTestUp;
     var checkTestDown;
     //verifie la valeure de l'input et on stock en variable check
     checkTestUp = $(".messageTextUp").val().length;
     checkTestDown = $(".messageTextDown").val().length;
     var enableDisableButton = function(){
       if(checkTestUp > 0 && checkTestDown > 0){
         $('#sendButton').removeAttr("disabled");
       }
       else {
         $('#sendButton').attr("disabled","disabled");
       }
     }
     //active desactiver la fonction bouton
     enableDisableButton();
     $('.messageTextUp').keyup(function(){
       //verifie la valeur du message et on stock en variable check au relachement de la touche
       checkTestUp = $(".messageTextUp").val().length;
       checkTestDown = $(".messageTextDown").val().length;
       //active desactiver la fonction bouton au relachement d"1 rouche
       enableDisableButton();
     });
     $('.messageTextDown').keyup(function(){
       //verifie la valeur du message et on stock en variable check au relachement de la touche
       checkTestDown = $(".messageTextDown").val().length;
       //active desactiver la fonction bouton au relachement d"1 rouche
       enableDisableButton();
     });

});
