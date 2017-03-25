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
                      <li><a href="#social">Social Media</a></li>
                      <li><a href="#">Page 3</a></li>
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
      <section id="social">
        <div class="container text-center"><br><br>
          <hr><h1 class="darkHeading">Social Media</h1><hr>
          <div class="row">
            <div class="col-xs-6">
              <a href="http://www.youtube.com" ><img class="fa" src="images/youtube.png"></a>
            </div>
            <div class="col-xs-6">
              <a href="http://www.instagram.com" ><img class="fa" src="images/instagram.png"></a>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-xs-6">
              <a href="http://www.facebook.com" ><img class="fa" src="images/facebook.png"></a>
            </div>
            <div class="col-xs-6">
              <a href="http://www.twitter.com" ><img class="fa" src="images/twitter.png"></a>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-xs-12">
              <a href="http://www.soundcloud.com" ><img class="fa" src="images/soundcloud.png"></a>
            </div>
          </div>
        </div>
      </section>
      <div style="height:4000px;background-color:gainsboro;"></div>
    </div>
</body>

</html>
