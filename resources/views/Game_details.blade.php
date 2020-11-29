<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/38d6db4b58.js"></script>

    <style>
        .car{
            width:100%; 
            height: 500px !important;
        }
        @media (max-width: 650px){
            .car{
            width:100%; 
            height: 300px !important;
        }
        }
    </style>

</head>

<body>
    <nav id="top" class="navbar navbar-expand-lg navbar-dark nopadding sticky-top" style="background-color: #202020;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{URL::asset('images/logo.png')}}" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link small" href="/">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link small" href="#">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link small" href="#">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link small" href="#">DASHBOARD</a>
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

    <div class="container p-lg-4 ">

        <div id="carousal" class="mb-5">
            <div id="carouselExampleInterval" class="carousel slide car" data-ride="carousel"
                >
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="5000">
                        <iframe class="car" src="https://www.youtube.com/embed/mqh4BX8-VR4"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="{{URL::asset('images/gImg1.jpg')}}"
                            class="car" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('images/gImg2.jpg')}}"
                            class="car" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('images/gImg3.jpg')}}"
                            class="car" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="text-white box rounded p-3 mb-4" id="Game">
            <div class="row no-gutters">
                <div class="col-lg-3 col-12 text-center">
                    <img src="{{URL::asset('images/img.webp')}}" height="200px" alt="">
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <h1 class="mb-2">WatchDogs</h1>
                    <p class="text-muted">Published:- <span class="text-white"> Kamlesh</span></p>
                    <p class="text-muted">Email:- <span class="text-white"> Kamlesh@gmail.com</span></p>
                    <p class="text-muted">Tags:- <span class="text-white"> HORROR,ADVENTURE</span></p>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-center justify-content-center">
                    <a href="#top" target="_blank"><button class="btn btn-lg btn-success text-white"><i class="fa fa-play"></i> Play</button></a>
                </div>
            </div>
        </div>

        <div class="text-white box p-4 mb-4" id="Game">
            <div class="row no-gutters">
                <div class="col-lg-4 col-12">
                    <h5>About The Game</h5>
                </div>
                <div class="col-lg-8 col-12">
                    <p style="font-weight: 100;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, ea officiis minus
                        necessitatibus perferendis earum sint? Aliquid, explicabo. Nulla, voluptatum esse consequuntur
                        vel ullam blanditiis possimus consectetur molestias voluptate soluta iure omnis a at beatae
                        sapiente, voluptas cum sit, quis provident reiciendis. Animi nisi vel exercitationem recusandae
                        odio minus aliquam?
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

<script>

</script>

</html>