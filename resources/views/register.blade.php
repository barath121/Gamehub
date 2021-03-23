@extends('layout')

@section('body')
<section class="d-flex justify-content-center align-items-center vh-100 p-3" id="register">
<form class="rounded p-4" action="/register" method="POST" enctype="multipart/form-data" style="background-color: #202020;" >
        <div class="text-center">
            <img src="{{URL::asset('images/logo.png')}}" alt="" style="width: 175px;">
        </div> <br>
        <div class="form-group">
            <label class="text-white small" for="username">Username</label>
            <input type="text" class="form-control" name="name" placeholder="username" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
        <label class="text-white small" for="exampleInputPassword2">About</label>
            <textarea type="text" class="form-control" name="about" id="exampleInputPassword2" placeholder="Enter something about yourself" required></textarea>
        </div>
        <div class="form-group">
           <label class="text-white small" for="exampleInputPassword3">Image</label>
           <input type="file" id= "exampleInputPassword3" name="profile_pic" accept=".jpeg,.png,.jpg,.webp" class="form-control-file" >
        </div>
        <div class="form-group">
            <label class="text-white small" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label class="text-white small" for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Password"  title="Password SHoule Contain atleast one Uppercase,one Lowercase,Number and more than 8 words" required>
        </div>

        <button type="submit" class="btn btn-dark w-100 text-center text-white">REGISTER NOW</button>

    
        <br><br>
        <a href="#"><p class="text-center text-white small">Privacy Policy</p></a>
        <p class="small text-light text-center">Already have GameHub Account? <a href="/login">Log In</a></p>
    </form>
</section>
@endsection