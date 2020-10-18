<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\LeaguePost;
use Illuminate\Http\Request;

class LeaguePostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('leaguePosts.index', ['leaguePosts' => LeaguePost::all()
        ->where('league_id', $id)->sortByDesc('created_at')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $league = League::findOrFail($id);
        return view('leaguePosts.create', ['league' => $league->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $league = League::findOrFail($request->input('league_id'));
        $validatedData = $request->validate(
            ['title' => 'required|max:50',
            'post' => 'required|max:300']
        );
        $validatedData['league_id'] = $league->id;
        $leaguePost = LeaguePost::create($validatedData);
        return redirect()->route('show', ['leaguePost' => $leaguePost->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('leaguePosts.show', ['leaguePost' => LeaguePost::find($id)]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
