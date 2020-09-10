<?php

namespace App\Http\Controllers;

use App\Players;
use App\Fixtures;
use App\League;
use App\Venues;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LeaguesController extends Controller
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
                $this->validate($request,['Lname'=>'required',
                'Lno_teams'=>'required',
                
                
                    ]);
        
                    $post = new League;
                    $post->league_name = $request->input('Lname');
                    $post->no_of_teams= $request->input('Lno_teams');
                    
                    $name=  DB::table('league')
                            ->select('*')
                           ->where('league_name', $post->league_name)
                            ->get();
        
                    // Camera
                   if($name->isEmpty() ){
                    $post->save();
                    return redirect()->back()->with('success','League Added Successfully');
                   }else{
                    return redirect()->back()->with('error','League Already Exist');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leagues = League::find($id);
        $league = League::all();
        $leage = Auth::user()->league;
        return view('edit.league-edit')->with(['leagues'=>$leagues,'league_name'=>$leage,'league'=>$league]);
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
        $this->validate($request,['Lname'=>'required',
        'Lno_teams'=>'required',
        
        
            ]);

            $post = $post = League::find($id);
            $post->league_name = $request->input('Lname');
            $post->no_of_teams= $request->input('Lno_teams');
            
            
            $post->save();
            return redirect()->back()->with('success','League Updated  Successfully');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = League::find($id);
        $post->delete();

        return redirect()->back()->with('error','League Deleted Successfully');
    }
}
