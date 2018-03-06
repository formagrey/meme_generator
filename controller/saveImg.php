<?php
    function saveImg($connect, $file){
        $point = strpos($file, ".");
        $urlImage = substr($file, 8 );
        $urlImage = substr($urlImage, 0, strpos($urlImage, "."));
        $str='momo';
        $str=md5($str);

        $extention = substr($file, $point);
        $date = date("Ymd_his");
        $file = "../src/img/meme/".$urlImage.$str.$date.$extention;


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

   function deleteImgFromDB($connect) {
       $stmt = $connect->prepare("DELETE FROM meme
       WHERE DATEDIFF(CURDATE(), date) < 7");
       //shell_exec("find /var/www/meme_generator/src/img/meme/ -mtime +7 -exec rm {} \;");
       $stmt->execute();

   }

   function selectImgAndDeleteImg($connect){
        $stmt = $connect->prepare("SELECT url FROM meme
        WHERE DATEDIFF(CURDATE(), date) < 1");

        $stmt->execute();
        $table = array();
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;

        while($row = $stmt->fetch()) {
            $table[$i] = $row['url'];
            unlink($table[$i]);
            $i++;
        }
    }
