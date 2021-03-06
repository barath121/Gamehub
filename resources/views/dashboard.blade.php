@extends('layout')

@section('body')
<section class="mb-5 mt-5" id="profile">
    <div class="container">
        <div class="d-flex flex-column justify-content-center bg-dark rounded p-3">
            <div class="row">
                <div class="col-sm-3 col-12 mb-3 text-center">
                    <img class="rounded shadow " width="200px" height="250px"  src="{{$user->profile_pic}}" alt="{{URL::asset('images/1.jpg')}}">
                </div> 
                <div class="col-sm-9 col-12">
                    <p class="text-light h6 text-sm-left text-center Do">Profile</p> <hr class="bg-light">
                        <div class="row">
                        <div class="col-sm-4 col-12 mb-3 text-sm-left text-center">
                            <div class="text-white small">Username: <span class="text-muted font-weight-bold">{{$user->name}}</span></div>
                            <div class="text-white small">Email: <span class="text-muted font-weight-bold">{{$user->email}}</span></div>
                        </div>
                        <div class="col-sm-7 col-12 text-sm-left text-center">
                            <p class="text-white small">About:</p> 
                            <div class="text-muted small">{{$user->about}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 mt-5" id="addedGames">
    <div class="container">
        <div class="d-flex flex-column justify-content-center text-center bg-dark rounded p-3">
            <p class="text-light h5 Do">Added Games</p> <hr>
            <div class="row">
            @if($games->count())
                @foreach($games as $game)
            <div class="col-lg-3 col-md-6 col-6">
                <a href="/gamedetails?game_id={{$game->id}}"> 
                    <img class="cover p-1" src="{{$game->icon}}" alt="">
                    <div class="small text-white">{{$game->title}}</div>
                </a>    
                </div>
          
                @endforeach
            @else
            <div class="text-white w-100 d-flex justify-content-center">
               <h5>No games uploaded yet....</h5> 
            </div>
            @endif
            </div>
        </div>
    </div>
</section>
@endsection
