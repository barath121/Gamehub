<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>
    .logincontainer{
        height : 90%;
        margin: auto;
        width: 90%;
        padding: 10px;        
        border: 3px solid black;
        border-radius: 2%;
        margin-top: 40px;
    }
    .formlogin{
        padding-left: 10px;
    }
</style>
    </head>
    <body>
    <form method="POST" action="/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">              
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>