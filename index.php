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
    <div class="row d-none d-md-inline-block" style="background-color: #000;">
        <div id="backgroundCarousel" class="carousel slide" data-bs-ride="carousel" style="padding:0;margin-top: 5px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#backgroundCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#backgroundCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#backgroundCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#backgroundCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 550px;">
                  <img src="happen.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item"style="height: 550px;">
                  <img src="batground.jpg" class="d-block w-100" alt="..." style="height: 550px;" >
                </div>
              <div class="carousel-item"style="height: 550px;">
                <img src="background.jpg" class="d-block w-100" alt="..." style="height: 550px;" >
              </div>
                <div class="carousel-item" style="height: 550px;">
                  <img src="ArnoldConquer.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row body-row">
        <div class="col-md-2 col-lg-6"></div>
        <div class="card col-md-8 col-lg-6">
            <div class="card-body">
                <h3 class="card-title" style="text-align: center; font-weight: 600;">Upcoming Features</h3>
                <h6 class="card-subtitle mb-2 text-muted d-none">Card subtitle</h6>
                <ul class="card-text" style="list-style-type:none; text-align: center; font-size: 1rem; ">
                    <li><span>Daily Scheduling</span></li>
                    <li><span>Weekly Reminders</span></li>
                    <li><span>Webscrape News - </span><a href="https://www.studytonight.com/python/web-scraping/exploring-beautifulsoup-methods">web scraping</a></li>
                    <li><span>Workout/Fitness Tracking</span> - <a href="https://wger.de/en/software/api">wger</a></li>
                    <li><span>Lyric Auto-censoring</span> - <a href="https://developer.spotify.com/documentation/web-api/quick-start/">dev.spotify</a></li>
                    <li><span>Spotify Management</span> - <a href="https://github.com/thelinmichael/spotify-web-api-node">spotify.github</a></li>
                    <li><span>Personal Device Tracking</span></li>
                    <li><span>New Network Device</span> - <a href="https://github.com/RafhaanShah/Net-Mon">networking.github</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3">
        </div>      
    </div>
    <div class="row">
            <a class="nav-link" href="#"><i class="fa-solid fa-right-to-bracket"></i></a>
    </div>
    <div class="row d-none">
        <div class="col-12">
            <form>
                <label>Submit your ideas</label>
            </form>
        </div>
    </div>
        <div id="login" class="container d-none">
            <div class="card card-body" style="justify-content: center; background-color: #2e2a59;  background-color: #333333; background-color: inherit; height: 500px; max-width: 400px; margin-left:auto; margin-right:auto;">
                <h3 style="border-bottom: 1px inset;">Login</h3>
                <br>
                <form id="login-form">
                    <label for="f-UserName" style="margin-bottom: 5px;">User Name</label><br>
                    <input type="text" id="f-UserName" placeholder="Username">
                    <br><br>
                    <label for="f-Password" style="margin-bottom: 5px;">Password</label><br>
                    <input type="text" id="f-Password" placeholder="Password"><br><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color:#fabe12;">Login</button>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:100%; background-color:#2e2a59; border-color:#2e2a59;">Login</button>
                </form>
            </div>
        </div>
</body>
</html>