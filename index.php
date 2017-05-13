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
    <script src="js/jquery.js"></script>
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
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/31383641&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=true"></iframe>
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
                                    <figcaption>
                                        <h3>Letterpress asymmetrical</h3>
                                        <p>Chillwave hoodie ea gentrify aute sriracha consequat.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/2.jpg" alt="img02" />
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/3.jpg" alt="img03" />
                                    <figcaption>
                                        <h3>Brunch semiotics</h3>
                                        <p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/4.jpg" alt="img04" />
                                    <figcaption>
                                        <h3>Chillwave nihil occupy</h3>
                                        <p>In post-ironic gluten-free deserunt, PBR&amp;B non pork belly cupidatat polaroid. </p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/5.jpg" alt="img05" />
                                    <figcaption>
                                        <h3>Kale chips lomo biodiesel</h3>
                                        <p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/6.jpg" alt="img06" />
                                    <figcaption>
                                        <h3>Exercitation occaecat</h3>
                                        <p>Street chillwave hoodie ea gentrify.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/7.jpg" alt="img01" />
                                    <figcaption>
                                        <h3>Selfies viral four</h3>
                                        <p>Raw denim duis Tonx Shoreditch labore swag artisan High Life cred, stumptown Schlitz quinoa flexitarian mollit fanny pack.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/8.jpg" alt="img02" />
                                    <figcaption>
                                        <h3>Photo booth skateboard</h3>
                                        <p>Vinyl squid ex High Life. Paleo Neutra nulla master cleanse, Helvetica et enim nesciunt esse.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/9.jpg" alt="img03" />
                                    <figcaption>
                                        <h3>Ex fashion axe</h3>
                                        <p>Qui nesciunt et, in chia cliche irure. Eu YOLO nihil mollit twee locavore, tempor keytar asymmetrical irure aute sriracha consequat.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/10.jpg" alt="img04" />
                                    <figcaption>
                                        <h3>Thundercats next level</h3>
                                        <p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/11.jpg" alt="img05" />
                                    <figcaption>
                                        <h3>Bushwick selvage synth</h3>
                                        <p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/12.jpg" alt="img01" />
                                    <figcaption>
                                        <h3>Bottle wayfarers locavore</h3>
                                        <p>Once there was a little asparagus, he was green and lonely.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/13.jpg" alt="img01" />
                                    <figcaption>
                                        <h3>Letterpress asymmetrical</h3>
                                        <p>Chillwave hoodie ea gentrify aute sriracha consequat.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img src="img/thumb/14.jpg" alt="img02" />
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </section>
                    <!-- // grid-wrap -->
                    <section class="slideshow">
                        <ul>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Letterpress asymmetrical</h3>
                                        <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                    </figcaption> <img src="img/large/1.jpg" alt="img01" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
                                    </figcaption> <img src="img/large/2.jpg" alt="img02" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Brunch semiotics</h3>
                                        <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
                                    </figcaption> <img src="img/large/3.jpg" alt="img03" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Chillwave nihil occupy</h3>
                                        <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                    </figcaption> <img src="img/large/4.jpg" alt="img04" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Kale chips lomo biodiesel</h3>
                                        <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
                                    </figcaption> <img src="img/large/5.jpg" alt="img05" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Exercitation occaecat</h3>
                                        <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
                                    </figcaption> <img src="img/large/6.jpg" alt="img06" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Selfies viral four</h3>
                                        <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
                                    </figcaption> <img src="img/large/7.jpg" alt="img01" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Photo booth skateboard</h3>
                                        <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
                                    </figcaption> <img src="img/large/8.jpg" alt="img02" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Ex fashion axe</h3>
                                        <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
                                    </figcaption> <img src="img/large/9.jpg" alt="img03" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Thundercats next level</h3>
                                        <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
                                    </figcaption> <img src="img/large/10.jpg" alt="img04" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bushwick selvage synth</h3>
                                        <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
                                    </figcaption> <img src="img/large/11.jpg" alt="img05" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Bottle wayfarers locavore</h3>
                                        <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
                                    </figcaption> <img src="img/large/12.jpg" alt="img01" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Letterpress asymmetrical</h3>
                                        <p>Pickled hoodie Pinterest 90's proident church-key chambray. Salvia incididunt slow-carb ugh skateboard velit, flannel authentic hoodie lomo fixie photo booth farm-to-table. Minim meggings Bushwick, semiotics Vice put a bird.</p>
                                    </figcaption> <img src="img/large/13.jpg" alt="img01" /> </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Vice velit chia</h3>
                                        <p>Tattooed assumenda chambray cray officia. 90's mollit ethnic church-key ex eu pop-up gentrify. Tonx raw denim eu, bitters nesciunt distillery Neutra pop-up. Drinking vinegar Helvetica Truffaut tattooed.</p>
                                    </figcaption> <img src="img/large/14.jpg" alt="img02" /> </figure>
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
                <h1 class="lightHeading">Contact Me</h1>
                <hr>
                <div class="row">
                    <div class="col-xs-12"> <a href="mailto:mmulabeats@gmail.com" class="email">MMULABEATS@GMAIL.COM</a> </div>
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
                        <a target="_blank" href="https://www.facebook.com/ProdByMitchMula" class="fa"><img src="images/facebook.png"></a>
                    </div>
                    <div class="col-xs-6">
                        <a target="_blank" href="https://twitter.com/1mitchmula" class="fa"><img src="images/twitter.png"></a>
                    </div>
                </div>
                <br>
                <br> </div>
        </section>
        <footer class="text-center"><br><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;All Rights Reserved<br>
        &nbsp;--&nbsp;Mitch Mula Beats&nbsp;--&nbsp;<br><br></footer>
    </div>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
</body>

</html>