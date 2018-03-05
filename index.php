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
                <img src="src/img/slime.png" alt="img" name="fichier">
            </div>
            <div class="jumbotron text-center">
                <img src="src/img/slime.png" alt=""class="imghover">
                <img src="src/img/img1.jpg" alt=""class="imghover">
                <img src="src/img/img2.jpg" alt=""class="imghover">
                <img src="src/img/img3.jpg" alt=""class="imghover">
                <img src="src/img/img4.jpg" alt=""class="imghover">
                <img src="src/img/img5.jpg" alt=""class="imghover">
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
