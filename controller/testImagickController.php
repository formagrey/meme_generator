<?php

    header('Content-type: image/png');

    //$img = new Imagick();

    /*$img->thumbnailImage(100, 0);

    echo $img;*/

    /* Create new image. This will be used as fill pattern */
    //$img->newPseudoImage(50, 50, "gradient:red-black");

    /* Create imagickdraw object */
    $draw = new ImagickDraw();

    /* Start a new pattern called "gradient" */
    $draw->pushPattern("white", 0, 0, 50, 50);

    /* Close the pattern */
    $draw->popPattern();

    /* Set font size to 52 */
    $draw->setFontSize(30);

    /* Annotate some text */

    $draw->annotation(40, 50, "#textUp");


    $draw->annotation(40,430, "#textDown");

    /* Create a new canvas object and a white image */
    $canvas = new Imagick('../src/img/slime.png');

    /* Draw the ImagickDraw on to the canvas */
    $canvas->drawImage($draw);

    /* 1px black border around the image */
    $canvas->borderImage('black', 1, 1);

    /* Set the format to PNG */
    $canvas->setImageFormat('png');

    /* Output the image */
    //header("Content-Type: image/png");
    echo $canvas;
?>
