<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use \Firebase\JWT\JWT;
use Cookie;
class Games extends Controller
{
    public function gameupload(Request $request){
        $data = $request->input();
        $game_id = $data["game_id"];
        $game_details = Game::where('id','=',$game_id)->first();
        $html = $request->file('html');
        $html_converted = file_get_contents($html);
        $build_files = $request->file('build');
        $template_files = $request->file('template');
        Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/'. $html->getClientOriginalName(),$html_converted);
        foreach ( $build_files as $file) {
          Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/Build/'. $file->getClientOriginalName(),file_get_contents($file));
        }
        foreach ( $template_files as $file) {
          Storage::disk(env('FILESYSTEM_DRIVER'))->put('games/'.$game_details->id.'/TemplateData/'. $file->getClientOriginalName(),file_get_contents($file));
        }
        Game::where('id','=',$game_id)->update(['play_link'=>Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$html->getClientOriginalName())]);
        $res = (object) array();
        $res->status = "Sucessful";
        $res->play_link = Storage::disk(env('FILESYSTEM_DRIVER'))->url('games/'.$game_details->id.'/'.$html->getClientOriginalName());
        return response()->json($res, 201);
        // Storage::disk(env('FILESYSTEM_DRIVER'))->deleteDirectory('barath');
        // return "DOne";

      }
  public function creategame(Request $request){
    $userid = JWT::decode(request()->cookie('JWT'),env('JWT_SECRET'),array('HS256'));
    $game = new Game;
    $data = $request->input();
    $game->title = $data["title"];
    $game->play_link = "Not Yet Uploaded";
    $game->user_id=$userid;
    $game->description=$data["description"];
    $game->images="Not Yet Uploaded";
    $game->tags=$data["tags"];
    $game->yt_video=$data["yt_video"];
    $game->save();
    $res = (object) array();
    $res->status = "Sucessful";
    $res->gamedetails = $game;
    return response()->json($res, 201);

  }  
  public function searchgames (Request $request){
    $game = Game::where('title',"like",'%'.$request->search_string.'%')->get();
    $res->status = "Sucessful";
    $res->gamedetails = $game;
    return response()->json($res, 201);
  }
  public function deletegame (Request $request){
    $data = $request->input();
    $game_id= $data["game_id"];
    Game::where('id',"=",$game_id)->delete();
    Storage::disk(env('FILESYSTEM_DRIVER'))->deleteDirectory('games/'.$game_id);
    $res = (object) array();
    $res->status = "Deleted";
    return response()->json($res, 410); 

  }
  public function creategameview(Request $request){
    return view('create_game');
  }
}
