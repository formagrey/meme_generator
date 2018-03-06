<!DOCTYPE html>
<html>
    <head>
        <title>Générateur mème</title>
        <?php include 'includes/header.php'; ?>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div class="container mt-3">
            <div id="imgici" class="jumbotron text-center">
                <h1 class="text-center">Générateur de mème de qualité!</h1>
                <img src="src/img/slime.png" alt="img" name="fichier">
            </div>
            <div class="jumbotron text-center div2">
                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-md-3 active">
                            <img src="src/img/slime.png" alt="slide 1" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img1.jpg" alt="slide 2" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img2.jpg" alt="slide 3" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img3.jpg" alt="slide 4" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img4.jpg" alt="slide 5" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img5.jpg" alt="slide 6" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img6.jpg" alt="slide 7" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img7.png" alt="slide 8" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img7.jpeg" alt="slide 9" class="imghover img-fluid mx-auto d-block">
                        </div>
                        <div class="carousel-item col-md-3">
                            <img src="src/img/img9.png" alt="slide 10" class="imghover img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg fa-2x iconegauche"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg fa-2x iconedroite"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="jumbotron text-center">
                <form method="post" action="controller/traitementImgController.php">
                    <input type="text" name="fichier" value="" class="d-none" id="pasVu">
                    <input type="text" class="messageTextUp" name="textUp" placeholder="Texte en haut de l'image"><br>
                    <input type="text" class="messageTextDown mt-1" name="textDown" value="" class="mt-1" placeholder="Texte en bas de l'image">
                    <div class="text-center mt-2">
                        <button id="sendButton" type="submit" class="btn btn-danger" value="Send">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
