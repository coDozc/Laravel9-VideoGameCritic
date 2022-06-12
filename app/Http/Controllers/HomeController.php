<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Game;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public  static function maincategorylist() {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }


    public function index() {
        $page='home';
        $sliderdata=Game::limit(4)->get();
        $gamelist1=Game::limit(6)->get();
        $setting=Setting::first();
        return view('home.index', [
            'sliderdata'=>$sliderdata,
            'page'=>$page,
            'setting'=>$setting,
            'gamelist1'=>$gamelist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }


    public function storemessage(Request $request) {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
    }

    public function storecomment(Request $request) {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->game_id = $request->input('game_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('game' ,['id'=>$request->input('game_id')])->with('info', 'Your comment has been sent, Thank You.');
    }

    public function game($id) {
        $data= Game::find($id);
        $images = DB::table('images')->where('game_id',$id)->get();
        $reviews =Comment::where('game_id',$id)->get();
        return view('home.game' ,[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
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
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

