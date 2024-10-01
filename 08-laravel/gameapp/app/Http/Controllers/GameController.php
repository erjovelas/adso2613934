<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game:: paginate(20);
        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::all();
        return view('games.create') ->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameRequest $request)
    {
        // dd($request->all());
        if ($request->hasFile('image')) {
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        }
        $game = new Game;
        $game->title = $request->title;
        $game->developer = $request->developer;
        $game->releasedate = $request->releasedate;
        $game->category_id = $request->category_id;
        $game->price = $request->price;
        $game->genre = $request->genre;
        $game->slider = $request->slider;
        $game->description = $request->description;

        if ($game->save()) {
            return redirect('games')
                ->with('message', 'The game : ' . $game->name . 'was succesfully added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
