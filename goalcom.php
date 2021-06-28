<html>
    <head>
    <?php
        include "head.php";
    ?>
    </head>
    <body>
    <?php
        include "nav.php";
    ?>
            <div class="body-row">
                <div class="row" style="">
                    <a class="card col-12 col-md-4 col-lg-4 no-border-card card-links" href="https://jw.org" style="text-decoration: none; background-color: #4a6da7;">
                        <div class="card-body">
                            <h1 class="card-title" style="color: #fff;" >JW.ORG</h1>
                        </div>
                    </a>  
                    <a class="card col-12 col-md-4 col-lg-4 no-border-card card-links" href="https://wol.jw.org" style="text-decoration: none; background-color: #f2f1ef;">
                        <div class="card-body">
                            <h1 class="card-title"  >WOL.JW.ORG</h1>
                        </div>
                    </a>
                    <a class="card col-12 col-md-4 col-lg-4 no-border-card card-links" href="https://barcablaugranes.com" style="background-color: #234597;">
                        <div class="card-body">
                            <img src="Barca_Blaugranes.png" >
                        </div>
                    </a>  
                    <a class="card col-12 col-md-4 col-lg-4 no-border-card card-links" href="https://spotify.com" style="background-color: #1ed760;">
                        <div class="card-body" >
                            <img src="spotify.jpg" >
                        </div>
                    </a>
                    <a class="card col-12 col-md-4 col-lg-4 no-border-card card-links" href="https://goal.com" style="background-color: #081f2c;">
                        <div class="card-body" >
                            <img src="goalcom.png" >
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id = "data" style="color: black !important;">
                            <?php
                                include "FileRead.php";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>
