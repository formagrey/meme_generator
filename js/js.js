$(document).ready(function(){
    $(".imghover").click(function(){
        var imgsrc = $(this).attr('src');
        //$("#imgici").html(src);
        alert(imgsrc);
        $("#imgici").attr("src", imgsrc);
    });
});
