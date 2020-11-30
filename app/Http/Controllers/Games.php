<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use \Firebase\JWT\JWT;
use Cookie;
use Carbon\Carbon;
class Games extends Controller
{
    public function gameupload(Request $request){
        $data = $request->input();
        $game_id = $request->game_id;
        $game_details = Game::where('id','=',$game_id)->first();
        $html = $request->file('html');
        $html_converted = file_get_contents($html);
        $build_files = $request->file('build');
        $template_files = $request->file('template');
        $image = $request->file('image');
        $image_icon = $request->file('icon');
        Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/'. $image_icon->getClientOriginalName(),file_get_contents($image_icon));
        Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/'. $html->getClientOriginalName(),$html_converted);
        foreach ( $image as $file) {
        Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/'. $file->getClientOriginalName(),file_get_contents($file));
        $image = new Image;
        $image->game_id = $game_id;
        $image->image_link =   Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$file->getClientOriginalName());
        $image->save();
        }
        foreach ( $build_files as $file) {
          Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/Build/'. $file->getClientOriginalName(),file_get_contents($file));
        }
        foreach ( $template_files as $file) {
          Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/TemplateData/'. $file->getClientOriginalName(),file_get_contents($file));
        }
        
        Game::where('id','=',$game_id)->update(['play_link'=>Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$html->getClientOriginalName()),'icon'=>Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$image_icon->getClientOriginalName())]);

        $res = (object) array();
        $res->status = "Sucessful";
        $res->play_link = Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$html->getClientOriginalName());
        return redirect('/');
      }
  public function creategame(Request $request){
    $userid = JWT::decode(request()->cookie('JWT'),env('JWT_SECRET'),array('HS256'));
    $game = new Game;
    $data = $request->input();
    $game->title = $data["title"];
    $game->play_link = "Not Yet Uploaded";
    $game->user_id=$userid;
    $game->description=$data["description"];
    $game->icon="Not Yet Uploaded";
    $game->tags=$data["tags"];
    $game->yt_video=str_replace('watch?v=', 'embed/', $data["yt_video"]);
    $game->save();
    $res = (object) array();
    $res->status = "Sucessful";
    $res->gamedetails = $game;
    return response()->json($res, 201);

  }  
  public function searchgames (Request $request){
    $game = Game::where('title',"like",'%'.$request->search_string.'%')->get();
    $res = (object) array();
    $res->status = "Sucessful";
    $res->gamedetails = $game;
    return response()->json($res, 201);
  }
  public function deletegame (Request $request){
    $data = $request->input();
    $game_id= $data["game_id"];
    Game::where('id',"=",$game_id)->delete();
    Image::where('game_id',"=",$game_id)->delete();
    Storage::disk(env('FILESYSTEM_DRIVER'))->deleteDirectory('games/'.$game_id);
    $res = (object) array();
    $res->status = "Deleted";
    return response()->json($res, 410); 

  }
  public function creategameview(Request $request){
    return view('create_game');
  }
  public function getGameData(Request $request){
    $game =  (object) array();
    $game = Game::where('id',"=", $request->game_id)->first();
    $images = "";
    if($game)
    $images = Image::where('game_id',"=", $request->game_id)->get();
    if($game)
    $user = User::where('id','=',$game->user_id)->first();
    $res = (object) array();
    $res->status = "Sucessful";
    $res->gamedata = $game;
    $res->images = $images;
    return response()->json($res, 201);
  }

  public function uploadView(Request $request){
    return view('uploads');
  }
  public function gamedetails(Request $request){
  $game = Game::where('id',"=", $request->game_id)->first();
  $user = User::where('id', '=', $game->user_id)->first();
  $images = Image::where('game_id','=',$request->game_id)->get();  

    return view('Game_details',[
      'game' => $game,
      'user'=>$user,
      'images' => $images
    ]);  }
  public function uploadgameview(Request $request){
    return view('uploads');
  }
  public function homepage(Request $request){
    $latest_games = Game::join('users', 'games.user_id', '=', 'users.id')
                    ->latest('games.created_at')                    
                    ->paginate(4);
    $games = Game::join('users', 'games.user_id', '=', 'users.id')
                  ->inRandomOrder()
                  ->paginate(8);
    return view('index',[
        'latest_games' => $latest_games,
        'games' => $games
    ]);
  }
}
