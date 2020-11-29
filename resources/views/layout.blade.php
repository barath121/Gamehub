<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub | Home</title>

    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/38d6db4b58.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark nopadding sticky-top" style="background-color: #202020;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{URL::asset('images/logo.png')}}" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="transition: 0.7s">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link small" href="/">Store</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link small" href="/newgame">Add Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link small" href="#">Dashboard</a>
                </li>
              </ul>
            </div>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link small" href="/login">Login</a>
                    </li>
                </ul>
              </div>
        </div>
    </nav>
    @yield('body')

    <footer id="footer" style="background-color: #202020;">
      <div class="container pt-3">
        <div>
          <img class="bg-dark p-1 rounded" width="38px" src="https://image.flaticon.com/icons/png/512/23/23730.png" alt="">
          <img class="bg-dark p-1 rounded" width="95px" src="https://discord.com/assets/bb408e0343ddedc0967f246f7e89cebf.svg" alt="">
          <img  class="bg-dark p-1 rounded" width="38px" src="https://image.flaticon.com/icons/png/512/9/9996.png" alt="">
          <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
        </div>
        <br>
        <div class="">
          <p class="text-muted small font-weight-bold">Resources</p>
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-4">
                  <div class="small text-light font-weight-bold mb-2">Backend</div>
                  <div class="small text-light">PHP</div>
                  <div class="small text-light">Laravel</div>
                  <div class="small text-light">AWS</div>
                </div>
                <div class="col-4">
                  <div class="small text-light font-weight-bold mb-2">Frontend</div>
                  <div class="small text-light">HTML</div>
                  <div class="small text-light">Blade</div>
                  <div class="small text-light">CSS</div>
                  <div class="small text-light">Bootstrap</div>
                  <div class="small text-light">Fontawesome</div>
                </div>
                <div class="col-4">
                  <div class="small text-light font-weight-bold mb-2">Database</div>
                  <div class="small text-light">MySQL</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="bg-dark">
        <div class="p-3">
          <div class="small text-light text-center">© copyrights 2020, all rights are reserved. Privacy Policy</div>
        </div>
      </div>
    </footer>

    <script>
      //Get the button:
      mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
    </script>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/38d6db4b58.js"></script>
</body>
</html>