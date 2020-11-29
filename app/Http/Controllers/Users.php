<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Game;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use Cookie;
class Users extends Controller
{
    public function register(Request $request){
    $user = new User;
    $data = $request->input();
    $user->name = $data["name"];
    $user->password=$data["password"];
    $user->email=$data["email"];
    $user->save();
    return response()->json($user, 201);
    }
    public function login(Request $request){
        $data = $request->input();
        $email = $data["email"];
        $password = $data["password"];
        $user = User::where('email','=',$email)->first();
        if($user->password == $password){
        $jwt = JWT::encode($user->id,env('JWT_SECRET'));    
        Cookie::queue('JWT', $jwt, 11000);
        return  response()->json($user);
        }
        else{
        return "Password Is Wrong";}
    }
    public function getuserdetails(Request $request){
        $userid = JWT::decode(request()->cookie('JWT'),env('JWT_SECRET'),array('HS256'));
        $user = User::where('id','=',$userid)->first();
        $games_owned = Game::where('user_id','=',$userid)->get();
        $res = (object) array();
        $res->status = "Sucessful";
        $res->user_details = $user;
        $res->game_details = $games_owned;
        return response()->json($res, 201);
    }
    public function loginview(Request $request){
        return view('login');
    }
    public function registerview(Request $request){
        return view('register');
    }
     // public function logout(Request $request){
    //     setcookie("JWT", "", time() - 3600);
    //     $res = (object) array();
    //     $res->status = "Sucessful";
    //     $res->message = "Logout Sucessful";
    //     return response()->json($res, 201);
    // }
}
