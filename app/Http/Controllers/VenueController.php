<?php

namespace App\Http\Controllers;

use App\Players;
use App\Fixtures;
use App\League;
use App\Venues;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class VenueController extends Controller
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
        //
        $this->validate($request,['Vname'=>'required',
        'Vprovince'=>'required',
        'Vcity'=>'required',
        'Vcapacity'=>'required',
        
            ]);

            $post = new Venues;
            $post->name = $request->input('Vname');
            $post->province= $request->input('Vprovince');
            $post->location = $request->input('Vcity');
            $post->capacity =$request->input('Vcapacity');
            
            $name=  DB::table('venues')
                    ->select('*')
                   ->where('name', $post->name)
                    ->get();

            // Camera
           if($name->isEmpty() ){
            $post->save();
            return redirect()->back()->with('success','Venue Added Successfully');
           }else{
            return redirect()->back()->with('error','Venue Already Exist');
           }
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
        $venues = Venues::find($id);
        $league = League::all();
        $leage = Auth::user()->league;
        return view('edit.edit-fixture')->with(['venues'=>$venues,'league_name'=>$leage,'league'=>$league]);
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
        $this->validate($request,['Vname'=>'required',
        'Vprovince'=>'required',
        'Vcity'=>'required',
        'Vcapacity'=>'required',
        
            ]);

            $post = new Venues;
            $post->name = $request->input('Vname');
            $post->province= $request->input('Vprovince');
            $post->location = $request->input('Vcity');
            $post->capacity =$request->input('Vcapacity');
            
          
            $post->save();
            return redirect()->back()->with('success','Venue Edited Successfully');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Venues::find($id);
        $post->delete();

        return redirect('/leagueadmin')->with('success','Venue Deleted Successfully');
    }
}
