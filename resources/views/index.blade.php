@extends('layout')

@section('body')

<div class="navbar navbar-expand-sm navbar-dark sticky-top m-2 no-gutters" style="top: 66px; background: #121212">
    <div class="container">
          <div class="navbar-nav">
            <a class="nav-link small d-inline-block" href="#">Discover</a>
            {{-- <a class="nav-link small d-inline-block" href="#">Browse</a> --}}
          </div>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control-sm mr-sm-2" type="search" placeholder="Search">
          </form>
    </div>
</div>

<section id="latest">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt=""> 
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt="">
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt="">
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt="">
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
    