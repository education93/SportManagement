<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fixtures;
use App\Venues;
use App\Referee;
use App\League;
use App\Database;
use App\Teams;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;

class FixtureController extends Controller
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
        $league = League::all();
        $venues = Venues::all();
        $teams = Teams::all();
        $referees = Referee::all();
        return view('Pages.add-fixture')->with(['teams'=>$teams,'league'=>$league,'venues'=>$venues,'referees'=>$referees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['away_team'=>'required',
        'home_team'=>'required',
        'referee'=>'required',
        'field'=>'required',
        'match_date'=>'required',
        
            ]);

            $post = new Fixtures;
            $post->team_1_name = $request->input('home_team');
            $post->team_2_name= $request->input('away_team');
            $post->match_date = $request->input('match_date');
            $post->venue_id =$request->input('field');
            $post->referee =$request->input('referee');

                    $m_time =$post->match_date;
                    $venue_id = $post->venue_id;
                    $ref_id = $post->referee;

                    $t = strtotime($m_time);
                    $t2 = strtotime($m_time) + 60*60*2; //  + 2 hours
                    $t3 = strtotime($m_time) - 60*60*2; //  + 2 hours
                    $start = date('y-m-d H:i:s', $t);
                    $end = date('y-m-d H:i:s', $t2);
                    $end2 = date('y-m-d H:i:s', $t3);

                     $match1=  DB::table('fixtures')
                    ->select('*')
                   ->whereBetween('match_date', [$start, $end])
                   ->where(['venue_id'=>$venue_id])
                    ->get();
                    $match2=  DB::table('fixtures')
                    ->select('*')
                   ->whereBetween('match_date', [$end2, $start])
                   ->where(['venue_id'=>$venue_id])
                    ->get();

                    $ref1=  DB::table('fixtures')
                    ->select('*')
                   ->whereBetween('match_date', [$start, $end])
                   ->where(['referee'=>$ref_id])
                    ->get();
                    $ref2=  DB::table('fixtures')
                    ->select('*')
                   ->whereBetween('match_date', [$end2, $start])
                   ->where(['referee'=>$ref_id])
                    ->get();

                // return $match1. "<br/><br/>".$match2;
           if($match1->isEmpty() && $match2->isEmpty() && $ref1->isEmpty() && $ref2->isEmpty() ){
            $post->save();
            return redirect('/fixtures/create')->with('success','Fixture Added Successfully');
           }else{
            return redirect('/fixtures/create')->with('error','Referee or Venue Occupied For this Time Please Verify');
           }
               
    
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($leage)
    {
        $fixtures = DB::table('fixtures')
         ->join('venues', 'fixtures.venue_id', '=', 'venues.id')
         ->select('fixtures.*', 'venues.*')
         ->orderBy('fixtures.match_date','ASC')
         ->get();

         $league = League::all();
       
        return view('Pages.fixtures')->with(['fixtures'=>$fixtures,'league_name'=>$leage,'league'=>$league]);
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
