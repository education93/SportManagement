<?php

namespace App\Http\Controllers;

use App\Players;
use App\Fixtures;
use App\League;
use App\Referee;
use App\Venues;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RefereeController extends Controller
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
         $this->validate($request,['Rname'=>'required',
         'Rprovince'=>'required',
         'Rhometown'=>'required',
         'Remail'=>'required',
             ]);
 
             $post = new Referee;
             $post->fullname = $request->input('Rname');
             $post->province= $request->input('Rprovince');
             $post->HomeTown = $request->input('Rhometown');
             $post->email =$request->input('Remail');
             
             $name=  DB::table('referee')
                     ->select('*')
                    ->where('fullname', $post->fullname)
                     ->get();
 
             // Camera
            if($name->isEmpty() ){
             $post->save();
             return redirect()->back()->with('success','Referee Added Successfully');
            }else{
             return redirect()->back()->with('error','Referee Already Exist');
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
        $referees = Referee::find($id);
        $league = League::all();
        $leage = Auth::user()->league;
        return view('edit.referee-edit')->with(['referee'=>$referees,'league_name'=>$leage,'league'=>$league]);
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

        $this->validate($request,['Rname'=>'required',
         'Rprovince'=>'required',
         'Rhometown'=>'required',
         'Remail'=>'required',
             ]);
 
            
             $post = Referee::find($id);
             $post->fullname = $request->input('Rname');
             $post->province= $request->input('Rprovince');
             $post->HomeTown = $request->input('Rhometown');
             $post->email =$request->input('Remail');
             
 
        
             $post->save();
             return redirect()->back()->with('success','Referee Updated Successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Referee::find($id);
        $post->delete();

        return redirect()->back()->with('error','Referee Deleted Successfully');
    }
}
