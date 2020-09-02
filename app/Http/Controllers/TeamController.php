<?php

namespace App\Http\Controllers;
use App\Teams;
use App\Scores;
use App\Fixtures;
use App\Players;
use App\Database;
use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
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
        $league = League::all();
        return view('Pages.add-teams')->with(['league'=>$league]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'manager'=>'required',
        'couch'=>'required',
        'about'=>'required',
        'logo'=>'image|nullable|max:1999',
        'home_kit'=>'image|nullable|max:1999',
        'away_kit'=>'image|nullable|max:1999',
            ]);

             // handle file upload
        if($request->hasFile('logo')){
            // get file with extention
            $filenamewithExt=$request->file('logo')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //get just extention
            $extention = $request->file('logo')->getClientOriginalExtension();
            //file name to store
            $logo = $filename.'_'.time().'.'.$extention;
            //upload image
            $request->file('logo')->storeAs('public/images/teams',$logo);
        }else{
            $logo = 'noimage.jpg';
        }

         // handle file upload
         if($request->hasFile('home_kit')){
            // get file with extention
            $filenamewithExt=$request->file('home_kit')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //get just extention
            $extention = $request->file('home_kit')->getClientOriginalExtension();
            //file name to store
            $homekit = $filename.'_'.time().'.'.$extention;
            //upload image
            $request->file('home_kit')->storeAs('public/images/teams',$homekit);
        }else{
            $homekit = 'noimage.jpg';
        }

         // handle file upload
         if($request->hasFile('away_kit')){
            // get file with extention
            $filenamewithExt=$request->file('away_kit')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //get just extention
            $extention = $request->file('away_kit')->getClientOriginalExtension();
            //file name to store
            $awaykit = $filename.'_'.time().'.'.$extention;
            //upload image
            $request->file('away_kit')->storeAs('public/images/teams',$awaykit);
        }else{
            $homekit = 'noimage.jpg';
        }


            $post = new Teams;
            $league = "League 1";
            $post->league_name = $league;
            $post->name = $request->input('name');
            $post->phone = $request->input('phone');
            $post->email = $request->input('email');
            $post->address = $request->input('address');
            $post->couch = $request->input('couch');
            $post->manager = $request->input('manager');
            $post->home_kit = $homekit;
            $post->away_kit = $awaykit;
            $post->image = $logo;
           


                     $team=  DB::table('teams')
                    ->select('*')
                   ->where(['name'=>$post->name,'league_name'=>$league])
                    ->get();

           if($team->isEmpty()){
            $post->save();
            return redirect('/teams/create')->with('success','Team Added Successfully');
           }else{
            return redirect('/teams/create')->with('error','Team Already Exist');
           }
              
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($league)
    {
        //
        $teams = Teams::where('league_name', '=', $league)->get();
        $league = League::all();
        return view('Pages.teams')->with(['teams'=>$teams,'league'=>$league]);
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
