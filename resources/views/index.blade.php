@extends('layout')

@section('body')

<div class="mb-3">
    <div class="container">
        <a href="#latest" class="d-inline-block text-muted ml-2 small font-weight-bold">Discover</a>
        <a href="#discover" class="d-inline-block text-muted ml-2 small font-weight-bold">Latest</a>
    </div>
</div>

<section id="latest">
    <div class="container">
        <p class="h6 text-light text-center">LATEST</p>
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
                </a>
            </div>
        @endif    
        </div>
    </div>
</section>

<section id="discover">
    <div class="container">
        <p class="h6 text-light text-center">DISCOVER</p>
        <div class="row">
        @if($games->count())
            @foreach($games as $game)
            <div class="col-lg-3 col-md-6 col-6 p-3">
                <a href="/gamedetails?game_id="+{{$game->id}}>
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
                </a>
            </div>
        @endif    
        </div>
    </div>
</section>

@endsection
    