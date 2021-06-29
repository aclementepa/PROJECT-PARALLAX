<?php

    $file = "C:\\Development\\Github\\PROJECT-PARALLAX\\goalcom.txt";
    $contents = file_get_contents($file);

    $contentRows = explode("[", $contents);
    $counter = 0;
    foreach ($contentRows as $row) {
        if($counter != 0)
        {
            $contentColumn = explode(",", $row);
            $textSrc = substr($contentColumn[0], 1, -1);
            $hrefSrc = substr($contentColumn[1], 1, -1);
            $imageSrc = substr($contentColumn[2], 1, -1);
            $imageSrc = substr($imageSrc, 0, strpos($imageSrc, "quality="))."quality=100&w=600";

            $image = "<img src=".$imageSrc."' style='' class=''>";
            $div = "<a href=".$hrefSrc."' class='card card-links col-12 col-md-3' style=' background-color: #081f2c; color: #fff; border: none; border-radius: 0.5rem;'><div class='card-body' style='width: 100%; padding: 0;'>".$image."
            <p style='padding: .5rem; text-align: center; text-decoration: none;'>".$textSrc."</p></div></a>";
            echo $div;
            echo "<br><br>";
        }
        $counter++;
        
        //$card = 
    }



?>