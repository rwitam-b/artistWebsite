<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            setup();
        });
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="loader">
      <h1 class="lightHeading animated infinite pulse">Loading...</h1>
    </div>
    <div id="content" style="display:none;">
      <nav style="display:none;" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#home"><strong>Mitch Mula Beats</strong></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right text-center">
                      <li><a href="#story">My Story</a></li>
                      <li><a href="#work">Latest Work</a></li>
                      <li><a href="#social">Social Media</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <header id="home">
          <div class="greet">
              <img class="animated zoomInDown" src="images/logo-white.png">
          </div>
      </header>
      <section id="story">
          <div class="row vertical-align">
              <div class="col-xs-12 col-lg-6 text-center">
                  <br><br>
                  <div class="container-fluid text">
                    <hr><h1 class="lightHeading text-center">My Story</h1><hr>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget molestie nulla, eu volutpat velit. Donec aliquet est aliquet nibh vehicula mattis. Sed ac sodales risus, et mattis tellus. Fusce faucibus dui eget augue bibendum semper. Maecenas
                      ut porttitor lacus. Integer rutrum feugiat ante mattis finibus. Phasellus et leo eget risus commodo congue. Donec sed ultrices nisl. Suspendisse posuere, odio in maximus ultricies, lacus turpis eleifend odio, sed viverra nibh orci
                      et ex. Sed ut sem eu erat imperdiet posuere id vel enim. Nullam risus purus, consequat ut fringilla id, vestibulum mollis elit. Nullam a lacus posuere, tincidunt urna in, iaculis lacus. Sed a tempus arcu, a tempus mi. Nam et mattis
                      arcu. Pellentesque mattis iaculis molestie.
                  </div>
              </div>
              <div class="col-xs-12 col-lg-6 text-center">
                  <img class="img-responsive" src="images/me.jpeg">
              </div>
          </div>
      </section>
      <section id="work">
        <div class="container-fluid text-center" style="background: linear-gradient(rgba(50,10,10,0.5),rgba(0,0,0,0.68));"><br><br>
          <hr><h1 class="lightHeading">Latest Beats</h1><hr>
          <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/31383641&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=true"></iframe>
            </div>
            <br><br><br><br>
          </div>
        </div>
      </section>
      <section id="social">
        <div class="container text-center"><br><br>
          <hr><h1 class="lightHeading">Contact Me</h1><hr>
          <div class="row">
            <div class="col-xs-12">
              <a href="mailto:mmulabeats@gmail.com" class="email">MMULABEATS@GMAIL.COM</a>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-xs-6">
              <a href="https://www.youtube.com/channel/UC4qJsy8IrqSCJ2vsE5Q1Exg" class="fa"><img src="images/youtube.png"></a>
            </div>
            <div class="col-xs-6">
              <a href="https://www.instagram.com/1mitchmula" class="fa"><img src="images/instagram.png"></a>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-xs-6">
              <a href="https://www.facebook.com/ProdByMitchMula" class="fa"><img src="images/facebook.png"></a>
            </div>
            <div class="col-xs-6">
              <a href="https://twitter.com/1mitchmula" class="fa"><img src="images/twitter.png"></a>
            </div>
          </div><br><br>
        </div>
      </section>
      <div style="height:1000px;background-color:gainsboro;">
          More content here--->
      </div>
      <footer class="text-center">
        All Rights Reserved
      </footer>
    </div>
</body>

</html>
