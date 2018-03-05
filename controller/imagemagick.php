<?php
    function imgMagick($textUp, $textDown, $file){

        //header("Content-Type: image/png");

        /* Create imagickdraw object */
        $draw = new ImagickDraw();

        /* Start a new pattern called "gradient" */
        $draw->pushPattern('gradient', 0, 0, 50, 50);

        /* Close the pattern */
        $draw->popPattern();

        /* Set font size to 52 */
        $draw->setFontSize(30);

        /* Set font color */
        $draw->setFillColor('white');

        /* Annotate some text */
        $draw->annotation(40, 50, $textUp);

        $draw->annotation(40, 470, $textDown);

        /* Create a new canvas object and a white image */
        $canvas = new Imagick($file);

        /* Draw the ImagickDraw on to the canvas */
        $canvas->drawImage($draw);

        /* 1px black border around the image */
        $canvas->borderImage('black', 1, 1);

        /* Set the format to PNG */
        $canvas->setImageFormat('png');

        return $canvas;

    }