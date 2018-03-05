<?php
    function saveImg($connect, $file){
        $point = strpos($file, ".");
        $urlImage = substr($file, 8 );
        $urlImage = substr($urlImage, 0, strpos($urlImage, "."));

        $extention = substr($file, $point);
        $date = date("Ymd_his");
        $file = "../src/img/meme/".$urlImage.$date.$extention;


        try{
            $stmt = $connect->prepare("INSERT INTO meme (url, date) VALUES ('$file', NOW()) ");
            $stmt->execute();
            return $file;

        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }
    }

    // recuup de l'url + id

    function idUrl($connect){


        $id_img = $_GET['id'];
        $sql=
            "SELECT id, url
            FROM `meme`
            WHERE id=$id_article";

        $resultat=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($resultat);
        echo $row['url'];
    }
