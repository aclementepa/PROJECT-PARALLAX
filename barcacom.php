<html>
    <head>
    <?php
        include "head.php";
    ?>
    <style>
        a {
            text-decoration: none;
        }
        @media (min-width: 992px)
        {
            .card {
                padding:15px;
            }
        }
    </style>
    </head>
    <body>
    <?php
        include "nav.php";
    ?>
            <div class="body-row">
                <br><br>
                        <div id = "data" style=" background-color: #234597; color: #fff; border-radius: .5rem; border: #081fsc 3px outset; " class="row">
                            <a class="card col-12 col-md-6 col-lg-6 card-links" href="https://barcablaugranes.com" style="background-color: #234597;border: none;">
                                <div class="card-body">
                                    <img src="Barca_Blaugranes.png" >
                                </div>
                            </a> 
                            <div class="col-6 d-none d-md-inline-block"></div> 
                            <?php
                                include "BarcaFileRead.php";
                            ?>
                        </div>
            </div>
    </body>

</html>
