<?php

    $file = "C:\\Development\\Github\\PROJECT-PARALLAX\\goalcom.txt";
    // file format: link, image src, caption
    $contents = file_get_contents($file);

    $contentRows = explode("[", $contents);
    $counter = 0;
    $arrLength = count($contentRows);
    foreach ($contentRows as $row) {
        if($counter != 0 && $counter != $arrLength)
        {
            $contentColumn = explode(",", $row);
            $hrefSrc = substr($contentColumn[0], 2, -2);
            $imageSrc = substr($contentColumn[1], 2, -2);
            $textSrc = substr($contentColumn[2], 2, -2);
            //$aposPos1 = strpos($row, "'", 0);
            //$aposPos2 = strpos($row, "'", $aposPos1 + 1);
            //$commaTest = substr($row, $aposPos1, ($aposPos2 - $aposPos1));
            
            //echo "<div class='row'><p style='color: #fff;'>".substr($row, $aposPos1, ($aposPos2 - $aposPos1))."</p></div>";
            //echo "<div class='row'><p style='color: #fff;'>".$aposPos2." + ".$aposPos1."</p></div>";
            //echo "<div class='row'><p style='color: #fff;'>".$commaTest."</p></div>";

            /*
            if(str_contains($commaTest, ","))
            {
                if(str_contains($commaTest, "'"))
                {                    
                    $contentColumn = explode('"', $row);
                    $textSrc = substr($contentColumn[0], 1, -1);
                    $hrefSrc = substr($contentColumn[1], 1, -1);
                    $imageSrc = substr($contentColumn[2], 1, -1);
                    echo "contains a comma and a single quote";
                }
                else
                {
                    // count how many 's and get the substrings in between them
                    //$contentColumn = explode("'", $row);

                    $textSrc = substr($contentColumn[0], 1, -1);
                    $hrefSrc = substr($contentColumn[1], 1, -1);
                    $imageSrc = substr($contentColumn[2], 1, -1);
                    echo "contains a comma, no single quote ";
                }
            }
            else
            {                
                //echo "<div class='row'><p style='color: #fff;'>does not contain a comma</p></div>";
                $contentColumn = explode(",", $row);
                $textSrc = substr($contentColumn[0], 1, -1);
                $hrefSrc = substr($contentColumn[1], 1, -1);
                $imageSrc = substr($contentColumn[2], 1, -1);
            }
            */

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