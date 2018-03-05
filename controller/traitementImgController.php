<?php
    include '../db/connectDB.php';
    include '../controller/saveImg.php';
    include 'imagemagick.php';

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

    echo  '<div><img src='. $fileDisk . '></div>';
    $url = "localhost/meme_generator/" . substr($fileDisk, 3);

    echo "<a class='text-center' href=".$fileDisk.">".$url."</a>";
?>
    <form method='post' action='../index.php'>
        <button class='btn btn-dark' type="submit" Value="Submit">Retour</button>
    </form>
