<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $data = Game::all();
        return view('user.game.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::all();
        return view('user.game.create', [
            'data' => $data
        ]);
        return view('user.game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Game();
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videolink = $request->videolink;
        $data->date = $request->date;
        $data->rating = $request->rating;
        $data->hours = $request->hours;
        $data->summary = $request->summary; if ($request->file('image')) {
        $data->image = $request->file('image')->store('images');
    }
        $data->save();
        $data->status = $request->status;

        return redirect('user/game');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game, $id)
    {
        $data = Game::find($id);
        return view('user.game.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game,$id)
    {
        //
        $data = Game::find($id);
        $datalist = Category::all();
        return view('user.game.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);

    }


    public function update(Request $request, Game $game, $id)
    {
        //
        $data = Game::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id(); //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videolink = $request->videolink;
        $data->date = $request->date;
        $data->rating = $request->rating;
        $data->hours = $request->hours;
        $data->summary = $request->summary;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('user/game');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game, $id)
    {
        $data=Game::find($id);
        if ($data->image && Storage::disk('public')->exists('$data->image')) {
            Storage::delete('$data->image');
        }
        $data->delete();
        return redirect('user/game');
    }
}
