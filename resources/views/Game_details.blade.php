@extends('layout')

@section('body')
    
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

@endsection