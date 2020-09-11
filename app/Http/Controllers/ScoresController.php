<?php

namespace App\Http\Controllers;

use App\Players;
use App\Fixtures;
use App\Scores;
use App\League;
use App\Venues;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //
                $this->validate($request,['fixture_id'=>'required',
                
                    ]);
        
                    $post = new Scores;
                    $post->fixture_id = $request->input('fixture_id');
                
                    $post->team_name= $request->input('team_name');
                    
                    $post->player_id= $request->input('player_id');
                    
                   
                    
                    $post->save();
                    return redirect()->back()->with('success','Goal Added Successfully');
                   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fixtures = Fixtures::find($id);
        $league = League::all();
        $venues = Venues::all();
       
        $leage = Auth::user()->league;
        return view('pages.add-scores')->with(['venues'=>$venues,'fixture'=>$fixtures,'league_name'=>$leage,'league'=>$league]);
    
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
            $this->validate($request,['fixture_id'=>'required',
            'team_name'=>'required',
            'player_id'=>'required',
            'no_of_goals'=>'required'
                ]);
    
                $post = Scores::find($id);
                $post->fixture_id = $request->input('fixture_id');
                $post->team_name= $request->input('team_name');
                $post->player_id= $request->input('player_id');
                $post->no_of_goals= $request->input('no_of_goals');
                
                $post->save();
                return redirect()->back()->with('success','Goal Updated Successfully');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Scores::find($id);
        $post->delete();

        return redirect()->back()->with('error','League Deleted Successfully');
    }
}
