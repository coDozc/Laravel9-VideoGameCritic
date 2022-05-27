<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $sliderdata=Game::limit(5)->get();
        $gamelist1=Game::limit(6)->get();
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'gamelist1'=>$gamelist1
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

