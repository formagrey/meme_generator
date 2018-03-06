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
        $draw->setFontSize(50);

        /* Définit le crénage de la police (une valeur négative signifie que les lettres sont proches les unes des autres) */
        $draw->setTextKerning(-5);

        /* Set font color */
        $draw->setFillColor('white');


        /* Définit à blanc la couleur du trait de la bordure */
        $draw->setStrokeColor('black');

        /* Rend plus fin le trait de la bordure */
        $draw->setStrokeWidth(2);

        /* set Font Weight */
        $draw->setFontWeight(800);

        /* set Text Alignement */
        $draw->setTextAlignment(Imagick:: ALIGN_CENTER);
        /* Annotate some text */
        $draw->annotation(250, 70, $textUp);

        /* set Text Alignement */
        $draw->setTextAlignment(Imagick:: ALIGN_CENTER);
        /* Annotate some text */
        $draw->annotation(250, 470, $textDown);


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
