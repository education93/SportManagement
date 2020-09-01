<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Throwable;
use App\Http\Controllers\CustomException;
use App\Players;
use App\League;
use App\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
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
        return view('Pages.add-players')->with(['league'=>$league]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['fullname'=>'required',
        'Jerseyno'=>'required',
        'age'=>'required',
        'province'=>'required',
        'town'=>'required',
        'country'=>'required',
        'player_image'=>'image|nullable|max:1999',
            ]);

             // handle file upload
        if($request->hasFile('player_image')){
            // get file with extention
            $filenamewithExt=$request->file('player_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //get just extention
            $extention = $request->file('player_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //upload image
            $request->file('player_image')->storeAs('public/images/player',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }


            $post = new Players;
            $post->full_name = $request->input('fullname');
            $post->jersey_no = $request->input('Jerseyno');
            $post->player_team = "Orlando Pirates"; //Auth::user()->team_name;
            $post->league_name =  "League 1"; //Auth::user()->league_name;
            $post->age = $request->input('age');
            $post->province_of_birth = $request->input('province');
            $post->country_of_birth = $request->input('country');
            $post->home_town = $request->input('town');
            $post->player_image = $fileNameToStore;

                    $team ="Orlando Pirates"; //Auth::user()->team_name;
                    $fullname = $request->input('fullname');

                     $match1=  DB::table('players')
                    ->select('*')
                   ->where(['player_team'=>$team,'full_name'=>$fullname])
                    ->get();

           if($match1->isEmpty()){
            $post->save();
            return redirect('/players/create')->with('success','Player Added Successfully');
           }else{
            return redirect('/players/create')->with('error','Player Already Exist');
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
