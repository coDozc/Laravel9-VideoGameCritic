<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('home.index');
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

