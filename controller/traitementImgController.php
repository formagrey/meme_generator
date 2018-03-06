<?php

    echo "<body style=\"background-color: grey\">";

    include '../db/connectDB.php';
    include '../controller/saveImg.php';
    include 'imagemagick.php';
    include '../includes/header.php';

     $connect= connectDB();

    if(isset($_POST['fichier'], $_POST['textUp'], $_POST['textDown'])){
        $file = "../".$_POST['fichier'];
        $file2= $_POST['fichier'];
        $textUp = $_POST['textUp'];
        $textDown = $_POST['textDown'];
    }

    $img = imgMagick($textUp, $textDown, $file);
    $fileDisk = saveImg($connect, $file2);


    // Save image
    $img->writeImage($fileDisk);

    echo  '<div class="container">
                <div class="jumbotron mt-3">
                    <div class="text-center">
                        <img class="text-center" src='. $fileDisk . '>
                    </div>
                </div>
        </div>';

    $url = "localhost/meme_generator/" . substr($fileDisk, 3);

    echo '<div class="container">
            <div class="jumbotron mt-3">
                <div class="text-center">
                    <div class="mb-4">URL : <a href='.$fileDisk.'>'.$url.'</a></div>
                </div>
                <form method="post" action="../index.php" class="mt-1 text-center">
                    <button class="btn btn-danger" type="submit" value="Submit">Retour</button>
                </form>
            </div>
        </div>
        </body>';
?>
