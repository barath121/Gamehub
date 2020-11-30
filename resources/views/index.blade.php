@extends('layout')

@section('body')

<div class="navbar navbar-expand-sm navbar-dark m-2">
    <div class="container">
          <div class="navbar-nav">
            <a class="nav-link small d-inline-block" href="#">Latest Games</a>
          </div>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control-sm mr-sm-2" type="search" placeholder="Search">
          </form>
    </div>
</div>

<section id="latest">
    <div class="container">
        <div class="row">
        @if($latest_games->count())
            @foreach($latest_games as $game)
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails?game_id={{$game->id}}">
                    <img class="cover" src="{{$game->icon}}" alt=""> 
                    <br><br>
                    <div class="small text-white">{{$game->title}}</div>
                    <div class="small text-muted">{{$game->name}}</div>
                </a>
            </div>
            @endforeach
        @else
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt="">
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
        @endif    
        </div>
    </div>
</section>

<div class="navbar navbar-expand-sm navbar-dark m-2">
    <div class="container">
          <div class="navbar-nav">
            <a class="nav-link small d-inline-block" href="#">Discover</a>
          </div>
    </div>
</div>

<section id="discover">
    <div class="container">
        <div class="row">
        @if($games->count())
            @foreach($games as $game)
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails?game_id={{$game->id}}">
                    <img class="cover" src="{{$game->icon}}" alt=""> 
                    <br><br>
                    <div class="small text-white">{{$game->title}}</div>
                    <div class="small text-muted">{{$game->name}}</div>
                </a>
            </div>
            @endforeach
        @else
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails">
                    <img class="cover" src="{{URL::asset('images/img.webp')}}" alt="">
                    <br><br>
                    <div class="small text-white">Watch Dogs: Legion</div>
                    <div class="small text-muted">XYZ</div>
                    <div class="text-white">₹ 0000.0</div>
                </a>
            </div>
        @endif    
        </div>
    </div>
</section>

@endsection
    