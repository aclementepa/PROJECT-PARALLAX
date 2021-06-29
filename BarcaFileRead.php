<?php

    $file = "C:\\Development\\Github\\PROJECT-PARALLAX\\barcacom.txt";
    // file format: link, image src, caption
    $contents = file_get_contents($file);

    $contentRows = explode("[", $contents);
    $counter = 0;
    //$arrLength = count($contentRows);
    foreach ($contentRows as $row) {
        if($counter != 0)
        {
            $contentColumn = explode(",", $row);
            $arrLength = count($contentColumn);
            $hrefSrc = substr($contentColumn[0], 2, -2);
            $imageSrc = substr($contentColumn[1], 2, -2);
            $textSrc = substr($contentColumn[$arrLength - 1], 2, -2);
            //$imageSrc = substr($imageSrc, 0, strpos($imageSrc, "quality="))."quality=100&w=600";

            $image = "<img src=".$imageSrc."' style='height: 200px;' class=''>";
            $div = "<a href=".$hrefSrc."' class='card card-links col-12 col-sm-6 col-md-4 col-lg-4' style=' background-color: #234597; color: #fff; border: none; border-radius: 0.5rem;'><div class='card-body' style='width: 100%; padding: 0;'>".$image."
            <p style='padding: .5rem; text-align: center; text-decoration: none;'><b>".$textSrc."</b></p></div></a>";
            echo $div;
            echo "<br><br>";
        }
        $counter++;
    }



?>