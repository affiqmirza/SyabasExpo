<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      /* Set the size of the div element that contains the map */
     #map {
       height: 400px;  /* The height is 400 pixels */
       width: 100%;  /* The width is the width of the web page */
      }
   </style>
    <title>Syabas Expo</title>
  </head>
  <body>
    <div class="container">
      @include ('menu')
      @yield('content')
    </div>
    <br>
    <style>
      .jumbotron {
        background-color: #3A917E; /* Orange */
        color: #ffffff;
        }
      .text-center{

      }
    </style>

    <div class="container">
      @include ('carousel')
      @yield('content')
    </div>
    <br>
    <!-- Container (About Section) -->
    <div class="container">
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
        <h2>About Us</h2><br>
        <h4>We are established by a team of highly motivated professionals with a refreshingly practical approach to business, and to clients' requirement.

We have grown with our clients and they entrusted us with their desired requirements. We quickly became recognized for combining excellent marketing services skills with the pragmatic understanding of client's requirement in difficult market conditions.</h4><br>
        <p>Our Business Include:</p>

          1.Marketing & promotion programmers.<br>
          2.Event Management.<br>
          3.Exhibition concept & construction.<br>
          4.Below the line advertising.<br>
          5.Entertainment/Performances.<br>
          6.Point of Sales material printing.<br>
        <br><button class="btn btn-default btn-lg" href=" ">Get in Touch</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Container (Contact Section) -->
  <div class="container">
  <div id="contact" class="container-fluid bg-grey">
    <h2 id="C4" class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> No 9B, Jalan PS 9/1, Taman   Prima  Selayang,  68100 Batu   Caves, Selangor   ( 3.2462640152209, 101.6514274478)</p>
        <p><span class="glyphicon glyphicon-phone"></span> Tel: 016 &#8211; 2323287</p>
        <p><span class="glyphicon glyphicon-envelope"></span> account@syabas-expo.com</p>
        <div id="map"></div>
        <script>
            // Initialize and add the map
            function initMap() {
              // The location of Uluru
              var uluru = {lat: 3.2462640152209, lng: 101.6514274478};
              // The map, centered at Uluru
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 4, center: uluru});
              // The marker, positioned at Uluru
              var marker = new google.maps.Marker({position: uluru, map: map});
            }
        </script>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>

  <!-- Image of location/map -->
  <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>See Media Advertising <a href="www.megaexpohomefair.com" title="Mega Expo Homefair">www.megaexpohomefair.com</a></p>
  </footer>

  </body>
</html>
