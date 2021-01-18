<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vsl</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <!-- Font Awesome cdn file -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="isojscss/style1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--Responsive tabs-->

    <link rel="stylesheet" href="isojscss/responsive-tabs.css">

    <!-- Magnific css file  -->



    <!-- Owl carousel css file  -->

  <link rel="stylesheet" href="css/hover-min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Owl carousel JS file  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- Magnific JS file  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- style file -->

    <link rel="stylesheet" href="css/style.css">

    <style>
        .ic p,
a {
  text-align: center;
  color: #eee;
}
        .ic{position: relative}
.ic  ul {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  margin: 1rem;
  list-style-type: none;
  font-size: 2rem;
}

.ic  ul li {
  padding: 1rem;
}

.fab {
  font-size: 4rem;
}

/* transition for social icon hover animation */
.fa-facebook,
.fa-codepen,
.fa-youtube,
.fa-instagram,
.fa-github,
.fa-pinterest {
  transition: 0.4s;
  cursor: pointer;
}

/* social media icons hover color */
.fa-facebook:hover,
.fa-facebook:focus {
  color: #1877f2;
  transform: scale(1.1);
}



.fa-youtube:hover,
.fa-youtube:focus {
  color: #df2426;
  transform: scale(1.1);
}

.fa-instagram:hover,
.fa-instagram:focus {
  color: #bd22a2;
  transform: scale(1.1);
}


        @media(max-width:991px) {
            .works .filtering span {
                margin: 0px 11px;
                padding: 8px 22px;
                font-size: 25px;
                line-height: 3;
                cursor: pointer;
                font-weight: 500;
            }

            #menu-overlay .content-wrapper {

                display: flex;
                justify-content: center;

            }

            .company-info {
                display: none;
            }

            #menu-overlay .primary-nav li a {
                padding: 35px;
                display: flex;
                justify-content: center;
            }
        }

        .txt h2 {
            font-weight: 300;
        }

        .txt {
            display: flex;
            justify-content: center;
            height: auto;
            width: 100%;
            height: 200px;
            position: relative;
        }

        .txt ul {
            position: absolute;
        }

        .txt img {
            object-fit: contain;
            width: 60%;
            position: relative;
            align-items: center;
            padding: 15px;
            top: 80px;
            left: 50%;
            transform: translate(-50%, -50%);

        }

    </style>

</head>

<body>
    <div id="main">

        <div class="ct-main-content ct-index">

            <!--HEADER START-->
            <header>

                <div style="display: flex" class="logo-container">
                    <a style="background: none; margin-right: 10px" href="index.php" id="logo" class="cursor-link">
                        <img style="height:70px" src="images/projects/logo1.png" alt="logo">
                   </a>
                    <span style="align-self: center; color:#e4ba6eeb; letter-spacing: 2px;"> vsl</span> 
                </div>

                <div class="menu-burger">
                    <div class="parallax-wrap burger-wrap">
                        <div class="parallax-icon">
                            <div class="burger-box">
                                <div class="burger-inner"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </header>
            <!--HEADER END-->
            <ul class="nav1">
                <li><a class="hvr-shrink" href="index.php#home">Home</a></li>
                <li><a class="hvr-shrink" href="about.php">About</a></li>
                <li><a class="hvr-shrink" href="services.php#service">Services</a></li>
                <li><a class="hvr-shrink" href="music.php">My Music</a></li>
                <li><a class="hvr-shrink" href="dance.php">Videos</a></li>
                <li><a class="hvr-shrink" href="contact.php">Contact</a></li>
            </ul>
            <!--MENU OVERLAY START-->
            <div id="menu-overlay">
                <div class="container">
                    <div class="content-wrapper">
                        <nav class="primary-nav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php" #service>Services</a></li>
                                <li><a href="music.php">My Music</a></li>
                                <li><a href="dance.php">Videos</a></li>
                                <li><a href="contact.php">Contact</a></li>

                            </ul>
                        </nav>
                        <div class="company-info">
                            <li> <a href="#" class="info-email  link-underline cursor-link">vishalsathwarax99@gmail.com</a></li><br>
                            <li>
                                <a href="tel:(+91)9898571874" class="info-tel link-underline cursor-link">(+91) 9898571874</a></li>
                            <div class="info-address">
                                <li> <a href="#" class="info-email cursor-link">D-113 ParasParabhu Soc, Isanpur, Ahmedabad , India - 382443.</a></li>

                            </div>
                            <ul class="sm-links">
                                <li><a href="https://instagram.com/vishalsathwaraa" class="cursor-link"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/vishal.sathwara.56" class="cursor-link"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC1Bzw_84AwYJLUXpNkUpb9g" class="cursor-link"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=919898571874&text=Hi%20There!" class="cursor-link"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://telegram.me/vsl_x99?start=hello" class="cursor-link"><i class="fab fa-telegram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--MENU OVERLAY END-->

            <div id="scroll-content" style="position: relative">
            </div>

            <!--PAGE CONTENT START-->


        </div>

    </div>
    <br><br><br><br>
    <section class="works">
        <div class="container" style="margin-top:50px">
            <div class="row no-gutters">
                <div class="filtering text-center col-sm-12">
                    <div class="">

                        <a style="color:orange" href="dance.php"><span >Dance</span></a>
                       <a style="color:orange"href="wedding.php"><span  class="active">Wedding Choreography</span></a>
                        <a style="color:orange"href="Beatmaking.php"><span >Beatmaking </span></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br><br><br><br>

                <div class="gallery full-width">

     <div class="items web  animate__animated animate__fadeIn animate__slow" id="dance">
                        <div class="c">
                            <div class="feature-img">
                                <img src="img/couple.png" width="100%" alt="">
                                <img src="img/play.png" class="play-btn" onclick="playVideo('video/Couple.mp4')">
                            </div>
                            <div class="feature-img">
                                <img src="img/family.png" width="100%" alt="">
                                <img src="img/play.png" class="play-btn" onclick="playVideo('video/Family.mp4')">
                            </div>
                            <div class="feature-img">
                                <img src="img/kaki.png" width="100%" alt="">
                                <img src="img/play.png" class="play-btn" onclick="playVideo('video/Kaki.mp4')">
                            </div>
                            <div class="feature-img">
                                <img src="img/Boys.png" width="100%" alt="">
                                <img src="img/play.png" class="play-btn" onclick="playVideo('video/Boys.mp4')">
                            </div>

                        </div>
                        <div class="ic">
  <p>Watch More Videos On Social Media.</p>
 <ul>
    <li><a href="https://www.facebook.com/vishal.sathwara.56/" target="_blank">
        <i class="fab fa-facebook" tabindex="0"></i>
      </a></li>
    <li><a href="https://www.instagram.com/vishalsathwaraa/" target="_blank">
        <i class="fab fa-instagram" tabindex="0"></i>
      </a></li>
    <li><a href="https://www.youtube.com/channel/UC1Bzw_84AwYJLUXpNkUpb9g">
        <i class="fab fa-youtube" tabindex="0" target="_blank"></i>
      </a></li>
  </ul>
</div>
                   
          <div  style=" background:#2d2a2aa6; width:100%; padding:13px; font-size:2rem" class="footer-copyright text-center py-3">© 2021
            <a href="index.php" style="color:white;">Vishal Sathwara</a>
        </div> 

                    </div>

                   

                    <div class="video-player animate__animated animate__fadeIn animate__slow" id="videoPlayer">
                        <video width="100%" controls autoplay id="myVideo">
                            <source src="" type="video/mp4">
                        </video>
                        <img src="img/close.png" class="close-btn" alt="" onclick="stop()">
                    </div>

                </div>





            </div>
        </div>
    </section>




    <script>
        var videoPlayer = document.getElementById("videoPlayer");
        var myVideo = document.getElementById("myVideo");

        function stop() {

            videoPlayer.style.display = "none";
            myVideo.pause();

        }

        function playVideo(file) {
            $("myVideo").prop('muted', false);
            myVideo.src = file;
            videoPlayer.style.display = "block";



        }

    </script>



    <script src="isojscss/main1.js"></script>
    <script src="isojscss/jquery.responsiveTabs.min.js"></script>
    <script src="isojscss/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script src="js/plugins.min.js"></script>
    <!--Google Map Api-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg"></script>
    <!--Site Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
