<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;

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
    $profile_pic_file = $request->file('profile_pic');
    if($profile_pic_file){
    Storage::disk(env('FILESYSTEM_DRIVER'))->put('profilepics/'. $profile_pic_file->getClientOriginalName(),file_get_contents($profile_pic_file));
    $user->profile_pic = Storage::disk(env('FILESYSTEM_DRIVER'))->url('profilepics/'. $profile_pic_file->getClientOriginalName());
    }
    $user->save();
    return redirect('/login');
    // return response()->json($user, 201);
    }
    public function login(Request $request){
        $data = $request->input();
        $email = $data["email"];
        $password = $data["password"];
        $user = User::where('email','=',$email)->first();
        if($user->password == $password){
        $jwt = JWT::encode($user->id,env('JWT_SECRET'));    
        Cookie::queue('JWT', $jwt, 11000);
        Cookie::queue('user_is_login', true, 11000, null, null, false, false);
        return redirect('/');
        // return  response()->json($user);
        }
        else{
        return "Password Is Wrong";}
    }
    public function getuserdetails(Request $request){
        $userid = JWT::decode(request()->cookie('JWT'),env('JWT_SECRET'),array('HS256'));
        $user = User::where('id','=',$userid)->first();
        $games_owned = Game::where('user_id','=',$userid)->get();
       
        return view('dashboard',[
            "user" => $user,
            "games" => $games_owned
        ]);
        // return response()->json($res, 201);
    }
    public function loginview(Request $request){
        return view('login');
    }
    public function profilepicchange(Request $request){
        $userid = JWT::decode(request()->cookie('JWT'),env('JWT_SECRET'),array('HS256'));
        $profile_pic_file = $request->file('profile_pic');
        Storage::disk(env('FILESYSTEM_DRIVER'))->put('profilepics/'. $profile_pic_file->getClientOriginalName(),file_get_contents($profile_pic_file));
        User::where('id','=',$userid)->update(['profile_pic'=>Storage::disk(env('FILESYSTEM_DRIVER'))->url('profilepics/'. $profile_pic_file->getClientOriginalName())]);
        $res = (object) array();
        $res->status = "Sucessfull";
        $res->user_details = User::where('id','=',$userid)->first();
        return response()->json($res, 201);
    }
    public function registerview(Request $request){
        return view('register');
    }
     public function logout(Request $request){
        setcookie("JWT", "", time() - 3600);
        setcookie("user_is_login", "", time() - 3600);
        $res = (object) array();
        $res->status = "Sucessful";
        $res->message = "Logout Sucessful";
        return redirect('/');
    }
}
