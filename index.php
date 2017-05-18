<!doctype html>
<html>

<head>
    <title>Mitch Mula Beats !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function () {
            setup();
        });
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="loader">
        <div class="spinner spinner-4"> </div>
    </div>
    <div id="content" style="display:none;">
        <nav style="display:none;" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#home"><strong>Mitch Mula Beats</strong></a> </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li><a href="#story">My Story</a></li>
                        <li><a href="#work">Latest Music</a></li>
                        <li><a href="#store">Beat Store</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#social">Social Media</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header id="home">
            <div class="greet"> <img class="animated zoomInDown" src="images/logo-white.png"> </div>
        </header>
        <section id="story">
            <div class="row vertical-align">
                <div class="col-xs-12 col-lg-6 text-center">
                    <br>
                    <br>
                    <div class="container-fluid text">
                        <hr>
                        <h1 class="lightHeading text-center">My Story</h1>
                        <hr> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget molestie nulla, eu volutpat velit. Donec aliquet est aliquet nibh vehicula mattis. Sed ac sodales risus, et mattis tellus. Fusce faucibus dui eget augue bibendum semper. Maecenas ut porttitor lacus. Integer rutrum feugiat ante mattis finibus. Phasellus et leo eget risus commodo congue. Donec sed ultrices nisl. Suspendisse posuere, odio in maximus ultricies, lacus turpis eleifend odio, sed viverra nibh orci et ex. Sed ut sem eu erat imperdiet posuere id vel enim. Nullam risus purus, consequat ut fringilla id, vestibulum mollis elit. Nullam a lacus posuere, tincidunt urna in, iaculis lacus. Sed a tempus arcu, a tempus mi. Nam et mattis arcu. Pellentesque mattis iaculis molestie. </div>
                </div>
                <div class="col-xs-12 col-lg-6 text-center"> <img class="img-responsive" src="images/me.jpeg"> </div>
            </div>
        </section>
        <section id="work">
            <div class="container-fluid text-center" style="background: linear-gradient(rgba(50,10,10,0.5),rgba(0,0,0,0.68));">
                <br>
                <br>
                <hr>
                <h1 class="lightHeading">Latest Music</h1>
                <hr>
                <div class="container">
                    <div class="embed-responsive embed-responsive-16by9" id="soundcloud">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br> </div>
            </div>
        </section>
        <section id="store">
            <div class="container-fluid text-center">
                <br>
                <br>
                <hr>
                <h1 class="lightHeading">Beat Store</h1>
                <hr>
                <div class="container">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="mfs_html5" src="https://airbit.com/widgets/html5/?uid=166115&config=310252" width="100%" height="510" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br> </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container-fluid text-center">
                <br>
                <br>
                <hr>
                <h1 class="lightHeading">Gallery</h1>
                <hr>
                <div id="grid-gallery" class="grid-gallery">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li>
                            <li>
                                <figure> <img src="img/thumb/1.jpg" alt="img01" />
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/2.jpg" alt="img02" />
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/3.jpg" alt="img03" />
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/4.jpg" alt="img04" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/5.jpg" alt="img05" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/6.jpg" alt="img06" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/7.jpg" alt="img07" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/8.jpg" alt="img08" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/9.jpg" alt="img09" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/10.jpg" alt="img10" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/11.jpg" alt="img11" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/12.jpg" alt="img12" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/13.jpg" alt="img13" /></figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/14.jpg" alt="img14" /></figure>
                            </li>
                        </ul>
                    </section>
                    <!-- // grid-wrap -->
                    <section class="slideshow">
                        <ul>
                            <li>
                                <figure><img src="img/large/1.jpg" alt="img01" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/2.jpg" alt="img02" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/3.jpg" alt="img03" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/4.jpg" alt="img04" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/5.jpg" alt="img05" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/6.jpg" alt="img06" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/7.jpg" alt="img07" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/8.jpg" alt="img08" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/9.jpg" alt="img09" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/10.jpg" alt="img10" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/11.jpg" alt="img11" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/12.jpg" alt="img12" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/13.jpg" alt="img13" /> </figure>
                            </li>
                            <li>
                                <figure><img src="img/large/14.jpg" alt="img14" /> </figure>
                            </li>
                        </ul>
                        <nav> <span class="icon nav-prev"></span> <span class="icon nav-next"></span> <span class="icon nav-close"></span> </nav>
                        <div class="info-keys icon">Navigate with arrow keys</div>
                    </section>
                    <!-- // slideshow -->
                </div>
                <!-- // grid-gallery -->
            </div>
        </section>
        <section id="social">
            <div class="container text-center">
                <br>
                <br>
                <hr>
                <h1 class="lightHeading">Social Media</h1>
                <hr>
                <div class="row">
                    <div class="col-xs-12"> <a href="mailto:mitchmula.beats@gmail.com" class="email">MITCHMULA.BEATS@GMAIL.COM</a> </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <a target="_blank" href="https://www.youtube.com/channel/UC4qJsy8IrqSCJ2vsE5Q1Exg" class="fa"><img src="images/youtube.png"></a>
                    </div>
                    <div class="col-xs-6">
                        <a target="_blank" href="https://www.instagram.com/1mitchmula" class="fa"><img src="images/instagram.png"></a>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <a target="_blank" href="https://www.facebook.com/1MitchMula" class="fa"><img src="images/facebook.png"></a>
                    </div>
                    <div class="col-xs-6">
                        <a target="_blank" href="https://twitter.com/1mitchmula" class="fa"><img src="images/twitter.png"></a>
                    </div>
                </div>
                <br>
                <br> </div>
        </section>
        <footer class="text-center">
            <br><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;All Rights Reserved
            <br> &nbsp;--&nbsp;Mitch Mula Beats&nbsp;--&nbsp;
            <br>
            <br>
        </footer>
    </div>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
</body>

</html>