<?php

include '../db/connectDB.php';
include 'saveImg.php';

$connect = connectDB();

selectImgAndDeleteImg($connect);

deleteImgFromDB($connect);




 ?>
