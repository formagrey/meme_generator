function changeDisplayedImage(){
    var src = $(this).attr('src');

    $("#imgici").html("<img name='fichier' src=\'"+src+"\'>");
    window.location.hash = $(this).attr('src'); // on récupère l'attribut pour l'inecter dans la barre d'adresse
    $("#pasVu").val(src);
}

//empèche de valider si les 2 champs ne sont pas remplis
function disableButton(checkTestUp, checkTestDown){
    if(checkTestUp > 0 && checkTestDown > 0){
        $('#sendButton').removeAttr("disabled");
    }
    else{
        $('#sendButton').attr("disabled","disabled");
    }
}

$(document).ready(function(){

    var src = $("#imgici img").attr('src');

    $("#pasVu").val(src);

    $(".img").click(function(){
        $("#imgici").html();
    });
    $(".imghover").click(changeDisplayedImage);

    //fonction bouton grisé + test text up
    var checkTestUp;
    var checkTestDown;
    //verifie la valeure de l'input et on stock en variable check
    checkTestUp = $(".messageTextUp").val().length;
    checkTestDown = $(".messageTextDown").val().length;

    disableButton(checkTestUp, checkTestDown);
    //desactiver le bouton


     $('.messageTextUp').keyup(function(){
       //verifie la valeur du message et on stock en variable check au relachement de la touche
       checkTestUp = $(".messageTextUp").val().length;
       checkTestDown = $(".messageTextDown").val().length;
       //active desactiver la fonction bouton au relachement d"1 rouche
       disableButton(checkTestUp, checkTestDown);
     });
     $('.messageTextDown').keyup(function(){
       //verifie la valeur du message et on stock en variable check au relachement de la touche
       checkTestDown = $(".messageTextDown").val().length;
       //active desactiver la fonction bouton au relachement d"1 rouche
       disableButton(checkTestUp, checkTestDown);
     });

     //Ecrit en majuscule dans input
     $("input").keyup(function(){
         $(this).val($(this).val().toUpperCase());
     });

     $('#carouselExample').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
});
