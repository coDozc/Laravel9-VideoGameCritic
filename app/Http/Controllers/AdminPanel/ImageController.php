<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($gid)
    {
        //
        $game = Game::find($gid);
        //$images = Image::where('game_id',$gid);
        $images = DB::table('images')->where('game_id',$gid)->get();
        return view('admin.image.index', [
            'game' => $game,
            'images' => $images,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request , $gid)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$gid)
    {
        //
        $data=new Image();
        $data->game_id = $gid;
        $data->title = $request->title;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index', ['gid'=>$gid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$gid, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gid,$id)
    {
        //
        $data=Image::find($id);
        if ($data->image && Storage::disk('public')->exists('$data->image')) {
            Storage::delete('$data->image');
        }
        $data->delete();
        return redirect()->route('admin.image.index', ['gid'=>$gid]);
    }
}
