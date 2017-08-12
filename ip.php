<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IP</title>
    <link href="https://fonts.googleapis.com/css?family=Play|Roboto|Saira+Extra+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/sidebar.css?v=<?=time();?>">
    <link rel="stylesheet" type="text/css" href="style/ip.css?v=<?=time();?>">
    <link rel="stylesheet" type="text/css" href="style/slider.css?v=<?=time();?>">
    <script src="js/ip.js"></script>
</head>
<body class="Site">
<header>
    <nav>
        <button id="open-btn" onclick="sidebarOpen()" >☰</button>
        <div id="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <div id="navigation">
            <a href="#"><i class="material-icons">photo_camera</i>Cam</a>
            <a href="#"><i class="material-icons">dashboard</i>My Feed</a>
            <div>Logout</div>
        </div>
    </nav>
    <div id="mySidebar" class="hidden sidebarClose">
        <button onclick="sidebarClose()"><i class="material-icons">clear</i>Close</button>
        <a href="#"><i class="material-icons">home</i>Home</a>
        <a href="#"><i class="material-icons">photo_camera</i>Cam</a>
        <a href="#"><i class="material-icons">dashboard</i>My Feed</a>
        <a href="#"><i class="material-icons">highlight_off</i>Logout</a>
    </div>
    <div id="myOverlay" class="hidden overlayClose" onclick="sidebarClose()"></div>
</header>
<div id="content">
    <article id="slider">
        <input checked type='radio' name='slider' id='slide1'/>
        <input type='radio' name='slider' id='slide2'/>
        <input type='radio' name='slider' id='slide3'/>
        <input type='radio' name='slider' id='slide4'/>
        <input type='radio' name='slider' id='slide5'/>
        <div id="slides">
            <div id="cont">
                <div class="inner">
                    <article>
                        <img src="https://www.nasa.gov/sites/default/files/images/751993main_Manhattan_NS_large.jpg"/>
                    </article>
                    <article>
                        <div class='caption'>
                            <div class="bar">A Bubble on Flower</div>
                        </div>
                        <img src="http://wallscollection.net/wp-content/uploads/2016/12/Animals-Image-HD-Collection.jpg"/>
                    </article>
                    <article>
                        <div class='caption'>
                            <div class="bar">A Small Elephant <a href="#">read more</a></div>
                        </div>
                        <img src="http://livemoments.in/wp-content/uploads/2016/08/Wonderful-Zen-Image.jpg"/>
                    </article>
                    <article>
                        <div class='caption'>
                            <div class="bar">A Yellow Flower <a href="#">read more</a></div>
                        </div>
                        <img src="http://www.gratuit-en-ligne.com/telecharger-gratuit-en-ligne/telecharger-image-wallpaper-gratuit/image-wallpaper-animaux/img/images/image-wallpaper-animaux-autruche.jpg"/>
                    </article>
                    <article>
                        <div class='caption'>
                            <div class="bar">A Pink Flower</div>
                        </div>
                        <img src="http://d2rormqr1qwzpz.cloudfront.net/photos/2015/02/11/73227-hurricane_and_spitfire.jpg"/>
                    </article>
                </div>
            </div>
        </div>
        <div id="commands">
            <label for='slide1'></label>
            <label for='slide2'></label>
            <label for='slide3'></label>
            <label for='slide4'></label>
            <label for='slide5'></label>
        </div>
        <div id="active">
            <label for='slide1'></label>
            <label for='slide2'></label>
            <label for='slide3'></label>
            <label for='slide4'></label>
            <label for='slide5'></label>
        </div>
    </article>
    <div class="container wide-container">
        <div class="photo">
            <img src="img/i1.jpg" alt="image-content">
            <div class="likes">41<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i2.jpg" alt="image-content">
            <div class="likes">43<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i3.jpg" alt="image-content">
            <div class="likes">23<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i4.jpg" alt="image-content">
            <div class="likes">67<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i5.jpg" alt="image-content">
            <div class="likes">31<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i6.jpg" alt="image-content">
            <div class="likes">58<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i7.jpg" alt="image-content">
            <div class="likes">83<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i8.jpg" alt="image-content">
            <div class="likes">64<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i9.jpg" alt="image-content">
            <div class="likes">96<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i10.jpg" alt="image-content">
            <div class="likes">27<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i11.jpg" alt="image-content">
            <div class="likes">66<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i12.jpg" alt="image-content">
            <div class="likes">78<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i13.jpg" alt="image-content">
            <div class="likes">35<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i14.jpg" alt="image-content">
            <div class="likes">74<i class="material-icons">favorite</i></div>
        </div>
        <div class="photo">
            <img src="img/i15.jpg" alt="image-content">
            <div class="likes">13<i class="material-icons">favorite</i></div>
        </div>
    </div>
</div>
<footer>
    <div id="foot">
        <div class="container">
            <div class="column s8">
                <h2>About Project</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h3>
            </div>
            <div class="column s1"></div>
            <div class="column s3">
                <h2>Connect</h2>
                <div class="social">
                    <img src="img/social-github.png" alt="github">
                </div>
                <div class="social">
                    <img src="img/social-linkedin.png" alt="linkedin">
                </div>
                <div class="social">
                    <img src="img/social-google.png" alt="google">
                </div>
                <div class="social">
                    <img src="img/social-telegram.png" alt="telegram">
                </div>
            </div>
        </div>
    </div>

    <div id="author">
        <div class="container">
            © 2017 Alexander Stepanov, All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>