<?php
include '../db/connectDB.php';
$connect= connectDB();
$delete = mysqli_query($connect,
"DELETE FROM memeGen
WHERE DATEDIFF(CURDATE(), dateGen) > 7");

shell_exec("find /var/www/groupe/meme_project/src/img/meme -mtime +7 -exec rm {} \;");


function all_img($connect) {
    $sql='SELECT * FROM meme WHERE date < GETDATE() - 30';
    $resultat=mysqli_query($connect,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($connect));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            //$delFile = shell_exec('wc -w *.txt');
            echo $row['url'];
            $delSQL='DELETE FROM meme WHERE `id`='.$row['id'];

        }
        /*DELETE FROM meme WHERE `id`=1;*/
        /*reset auto increment + check cle étrangere*/
/*        SET FOREIGN_KEY_CHECKS=0;
        TRUNCATE `id`;
        SET FOREIGN_KEY_CHECKS=1;*/
}



/*pascal
USE Database_name;
DELETE FROM Table_name
WHERE Date_column < GETDATE() - 30*/








 ?>
