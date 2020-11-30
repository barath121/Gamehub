@extends('layout')

@section('body')
    
    <div class="container p-lg-4 ">

        <div id="carousal" class="mb-5">
            <div id="carouselExampleInterval" class="carousel slide car" data-ride="carousel"
                >
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="5000">
                        <iframe class="car" src={{$game->yt_video}}
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
        {{-- <hr class="bg-dark"> --}}
        <div class="text-white box rounded p-3 mb-4" id="Game">
            <div class="row no-gutters">
                <div class="col-lg-3 col-12 bg-dark p-2 rounded text-center">
                    <img src="{{URL::asset('images/img.webp')}}" height="200px" alt="">
                </div>
<<<<<<< HEAD
                <div class="col-lg-6 col-12 text-center d-flex flex-column justify-content-center">
                    <div class="p-3">
                        <h3 class="mb-2">WatchDogs</h3> <br>    
                        <div class="text-muted">Published: <span class="text-white"> Kamlesh</span></div>
                        <div class="text-muted">Email: <span class="text-white"> Kamlesh@gmail.com</span></div>
                        <div class="text-muted">Tags: <span class="text-white"> HORROR,ADVENTURE</span></div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-center justify-content-center">
                    <a href="#top" target="_blank"><button class="btn btn-lg btn-outline-success text-white"><i class="fa fa-play"></i> Play</button></a>
=======
                <div class="col-lg-6 col-12 text-center">
                    <h1 class="mb-2">{{$game->title}}</h1>
                    <p class="text-muted">Published:- <span class="text-white"> {{$user->name}}</span></p>
                    <p class="text-muted">Email:- <span class="text-white">{{$user->email}}</span></p>
                    <p class="text-muted">Tags:- <span class="text-white">{{$game->tags}}</span></p>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-center justify-content-center">
                    <a href="{{$game->play_link}}" target="_blank"><button class="btn btn-lg btn-success text-white"><i class="fa fa-play"></i> Play</button></a>
>>>>>>> 606e14cf59086833be93464464c7fff0c43c529a
                </div>
            </div>
        </div>
        <hr class="bg-dark">
        <div class="text-white box p-4 mb-4" id="Game">
            <div class="row no-gutters">
                <div class="col-lg-4 col-12">
                    <h5>About The Game</h5>
                </div>
                <div class="col-lg-8 col-12">
                    <p style="font-weight: 100;">{{$game->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection