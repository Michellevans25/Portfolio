<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

           <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Volton Free Responsive Template</title>
        <meta name="description" content="">
        <!-- 
        Volton Template
        http://www.templatemo.com/tm-441-volton
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="images/profile.jpg" alt="Volton">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">Michell Martinez</h3>
                                <p class="profile-description">Desarrollo web/p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                        <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="img/profile.jpg" alt="Volton">
                </div>
                <h3 class="profile-title">Volton</h3>
                <p class="profile-description">Digital Photography</p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
                    <li><a href="#about"><i class="fa fa-pencil"></i>About Me</a></li>
                    <li><a href="#projects"><i class="fa fa-paperclip"></i>My Gallery</a></li>
                    <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        

        <div class="banner-bg" id="top">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2>Simple Design | Personal Portfolio</h2>
                <h5>This is a mobile friendly layout with Bootstrap v3.3.1 framework. Maecenas eu ante at nunc posuere fringilla sit amet non dolor. Proin condimentum fermentum nunc.</h5>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                    <!-- ABOUT -->
                    <div class="page-section" id="about">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">Learn About Me</h4>
                            <div class="about-image">
                                <img src="img/8.jpg" alt="about me">
                            </div>
                            <p>Volton is free website design from <span class="blue">template</span><span class="green">mo</span>. You can use this template for any purpose. Please tell your friends about it. Thank you. Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a> for images used in this design. You can <strong>change menu icons</strong> by checking <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/" target="_parent">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong></p>
                            <hr>
                        </div>
                    </div> <!-- #about -->
                    </div>
                    
                    <!-- PROJECTS -->
                    <div class="page-section" id="projects">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                        </div>
                    </div>
                    <div class="row projects-holder">
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/1.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/2.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/3.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/4.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/5.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/6.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .projects-holder -->
                    </div>
                    <hr>

                    <!-- CONTACT -->
                    <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                            <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="#" method="post" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your-name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" id="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" id="your-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="Send Message">
                            </fieldset>
                        </form>
                    </div> <!-- .contact-form -->
                    </div>
                    <hr>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">Copyright &copy; 2015 Company Name</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

    </body>
</html>
    </body>
</html>
