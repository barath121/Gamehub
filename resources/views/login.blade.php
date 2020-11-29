@extends('layout')

@section('body')
<section class="d-flex justify-content-center align-items-center vh-100 p-3" id="login">
    <form class="rounded p-4" action="/login" method="POST" style="background-color: #202020;">
        <div class="text-center">
          <img src="{{URL::asset('images/logo.png')}}" alt="" style="width: 175px;">
        </div> <br>
        <div class="form-group">
          <label class="text-white small" for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label class="text-white small" for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-dark w-100 text-center text-white">LOG IN NOW</button>
        <br><br>
        <a href="#"><p class="text-center text-white small">Privacy Policy</p></a>
        <p class="small text-light text-center">Don't have GameHub Account? <a href="/register">Sign UP</a></p>
      </form>
</section>
@endsection