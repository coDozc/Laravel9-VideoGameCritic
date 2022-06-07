<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public  static function maincategorylist() {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }

//    public  static function headnav() {
  //      return Game::where('category_id', '=', 'parent_id')->with('children')->get();
    //}

    public function index() {
        $page='home';
        $sliderdata=Game::limit(4)->get();
        $gamelist1=Game::limit(6)->get();
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'page'=>$page,
            'gamelist1'=>$gamelist1
        ]);
    }
    public function game($id) {
        $data=Game::find($id);
        $images = DB::table('images')->where('game_id',$id)->get();
        return view('home.game', 'home.header' ,[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function text() {
        return view('home.text');
    }

    public function param($id, $number) {
        //echo "parameter: ", $id," + ", $number;
        //echo "<br>sum: ", $id+$number;
        return view('home.text', [
            'id' => $id,
            'number' => $number
        ]);
    }

    public function save(Request $request) {
        //echo "save function<br>";
        //echo "First Name: ", $_REQUEST["fname"];
        //echo "<br>Last Name: ", $_REQUEST["lname"];
        return view('home.text', [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]
            ]);
    }
}

