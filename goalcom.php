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
                <div class="row" style="">
                    <a class="card col-12 col-md-5 col-lg-5 card-links" href="goalcom.php" style="background-color: #081f2c;">
                        <div class="card-body" >
                            <img src="goalcom.png" >
                        </div>
                    </a>
                </div>
                <br><br>
                        <div id = "data" style="color: black !important; border-radius: .5rem;border: #081fsc 3px outset; " class="row">
                            <?php
                                include "FileRead.php";
                            ?>
                        </div>
            </div>
    </body>

</html>
