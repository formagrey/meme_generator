<?php
    include '../database/connectDB.php';

    function recupImg(){
        if(isset($_FILES['fichier'])){
            $fichier = $_FILES['fichier'];
        }
        $fichier;
    }
    