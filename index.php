<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/90cd6f0909.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link type="text/css" rel="stylesheet" href="desktop.css">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: none;
        }
    </style>
</head> 
<body>
    <div class="row" style="margin:0;">        
        <nav class="test-blur col-12" style="background-image: url(backgroundSmall.jpg); height: 800px; padding:0;">        
            <div id="nav-bar-container" class="container-fluid" style="width: 100%; opacity: .9; ">
                <div class="container-fluid" style="padding:.5% 60px; ">
                    <div class="navbar navbar-expand-md" style="color: white;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" style="font-weight: 600; font-size: 1.5rem; margin-left: 2.5%;">Clemente.Tech</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: calc(.1rem + 1.2vw); font-weight: 400;">
                            <ul class="navbar-nav me-auto mb-0"  style="margin-left:70%; margin-right: auto;">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Web Fun
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-right-to-bracket"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="row" style="padding:1.5rem;">
        <div class="blocks col-md-6" style="background-color: inherit;">
            <h1 style="text-align: center; font-weight: 600;">Upcoming Features</h1>
            <hr style="margin-left: auto; margin-right: auto; width: 75%; height: 1px; border: 1px #fff outset;">
            <div class="container">
                <ul style="list-style-type:none; text-align: left; font-size: 1.75rem; margin-left:10%;">
                    <li><span>Daily Scheduling</span></li>
                    <li><span>Weekly Reminders</span></li>
                    <li><span>Webscraping Upcoming News Sources - (jw.org, barcablaugranes, espn, goal.com, etc.)</span><a href="https://www.studytonight.com/python/web-scraping/exploring-beautifulsoup-methods">web scraping</a></li>
                    <li><span>Workout/Fitness Tracking</span> - <a href="https://wger.de/en/software/api">wger</a></li>
                    <li><span>Lyric Auto-censoring</span> - <a href="https://developer.spotify.com/documentation/web-api/quick-start/">dev.spotify</a></li>
                    <li><span>Spotify Management</span> - <a href="https://github.com/thelinmichael/spotify-web-api-node">spotify.github</a></li>
                    <li><span>Personal Device Tracking</span></li>
                    <li><span>New Network Device</span> - <a href="https://github.com/RafhaanShah/Net-Mon">networking.github</a></li>
                </ul>
            </div>
        </div>
        <div class="blocks col-md-6" style="background-color: inherit;">
            <h1 style="text-align: center; font-weight: 600;">Installed Features</h1>
            <hr style="margin-left: auto; margin-right: auto; width: 75%; height: 1px; border: 1px #fff outset;">
            <div class="container mx-auto">
                <ul style="width: 50%; list-style-type:none;">
                    <li></li>
                </ul>
            </div>
        </div>
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