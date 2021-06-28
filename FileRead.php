<?php

    $file = "C:\\Development\\Github\\PROJECT-PARALLAX\\goalcom.txt";
    //$myfile = fopen(, "r") or die("Unable to open file!");

    $contents = file_get_contents($file);
    //$contents = substr($contents, 1, -1);
    //echo $current;
    $card = "<div><img src='";

    $contentRows = explode("[", $contents);
    $counter = 0;
    foreach ($contentRows as $row) {
        if($counter != 0)
        {
            $contentColumn = explode(",", $row);
            $text = substr($contentColumn[0], 1, -1);
            $href = substr($contentColumn[1], 1, -1);
            $image = substr($contentColumn[2], 1, -1);
    
            echo $text;
            echo "<br><br>";
            echo $href;
            echo "<br><br>";
            echo $image;
            echo "<br><br>";
        }
        $counter++;
        
        $card = 
    }



?>