<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/90cd6f0909.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link type="text/css" rel="stylesheet" href="desktop.css">
    <link type="text/css" rel="stylesheet" href="slider.css">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <style>
    </style>
    <style>
        ::-webkit-scrollbar {            
            width: 10px;
        }
        ::-webkit-scrollbar-thumb{
        background-color: #5b5d5a; 
        }
        ::-webkit-scrollbar-thumb:hover{
        background: #2d2f2c; 
        }
        ::-webkit-scrollbar-thumb:active{
        background: #000; 
        }
        ::-webkit-scrollbar-track {
        background: #5b5d5a
        }
 
        /*
        ::-webkit-scrollbar{
            width:30px;
          }
          ::-webkit-scrollbar-track{
            border-radius: 10px;
          }
          */
    </style>
</head> 
<body>
    <div class="row" style="margin:0;">        
        <nav class="test-blur col-12" style="background-color: #000;/* background-image: url(conquer.jpg); background-position:center; background-size: contain; background-repeat: no-repeat; height: 500px;*/ padding:0;">        
            <div id="nav-bar-container" class="container-fluid" style="width: 100%; opacity: .9; ">
                <div class="container-fluid" style="padding:.5% 60px; ">
                    <div class="navbar navbar-expand-md" style="color: white;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="https://clemente.tech" style="font-weight: 600; font-size: calc(1rem + 1.2vw); margin-left: 2.5%;">Clemente.Tech</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: calc(.1rem + 1.2vw); font-weight: 400;">
                            <ul class="navbar-nav me-auto mb-0"  style="margin-left:65%; margin-right: auto;">
                                <li class="nav-item dropdown d-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Web Fun
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:green;">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ideas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    </li>
                            </ul>
                        </div>
                        <div style="float: right; margin-top: 1%;">
                            <a class="nav-link" href="#" style="font-size: 1.5rem; margin-top:.1rem;"><i class="fas fa-sign-in-alt"></i></a>
                        </div>
                        <div style="float: right; margin-top: 1%;">
                            <label class="switch">
                                <input type="checkbox" id="dark-mode"> 
                                <span class="slider"></span>       
                              </label>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="row" style="background-color: #000;  ">
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
    <div class="row" style="padding:2.5rem; background-color: #eceae7; border-top: 1px solid #000;">
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
            <h1>test</h1>
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