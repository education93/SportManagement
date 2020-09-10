<?php

namespace App\Http\Controllers;

use App\Results;
use App\Scores;
use App\Score;
use App\Fixtures;
use App\Players;
use App\Database;
use App\League;
use App\Log;
use App\Referee;
use App\Teams;
use App\Venues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function __construct(){
    //     $this->middleware('auth',['/','index']);
    // }

    public function index()
    {
        $leage ="League 1";
        //Creating TABLE
        function team_score($team,$fixture_id)
        {
            $results = Scores::select( DB::raw('SUM(no_of_goals) as goals')) //function to get goals for each team per match
                                ->where('team_name', '=', $team)
                            -> where('fixture_id', '=', $fixture_id)
                            ->get();
    
                            foreach ($results as $result) {
                                if($result->goals==""){
                                    return "0";
                                }else{
                                    return $result->goals;
                                }
                            }
        }
    
             $results = Results::where('league_name', '=', $leage)->groupby('fixture_id')->get(); //Get All Results
    
             Log::truncate(); //Clear Table So to reload with fresh uPdates
         
            foreach ($results as $result) {
                if ($result->team_1_scores > $result->team_2_scores) {
                    $team1 = Log::updateOrCreate(
                        ['league_name' => $result->league_name,'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_1,'mp'=>1,'w'=>1,'d'=>0,'l'=>0,'gf'=>team_score($result->team_1,$result->fixture_id),'ga'=>team_score($result->team_2,$result->fixture_id),'gd'=>team_score($result->team_1,$result->fixture_id)-team_score($result->team_2,$result->fixture_id)],
                        ['pts' => $result->team_1_points]
                    );
    
                    $team2 = Log::updateOrCreate(
                        ['league_name' => $result->league_name, 'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_2,'mp'=>1,'w'=>0,'d'=>0,'l'=>1,'gf'=>team_score($result->team_2,$result->fixture_id),'ga'=>team_score($result->team_1,$result->fixture_id),'gd'=>team_score($result->team_2,$result->fixture_id)-team_score($result->team_1,$result->fixture_id)],
                        ['pts' => $result->team_2_points]
                    );
                }
        
                if ($result->team_2_scores > $result->team_1_scores) {
                    $team2 = Log::updateOrCreate(
                        ['league_name' => $result->league_name, 'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_2,'mp'=>1,'w'=>1 ,'d'=>0,'l'=>0,'gf'=>team_score($result->team_2,$result->fixture_id),'ga'=>team_score($result->team_1,$result->fixture_id),'gd'=>team_score($result->team_2,$result->fixture_id)-team_score($result->team_1,$result->fixture_id)],
                        ['pts' => $result->team_2_points]
                    );
                    $team1 = Log::updateOrCreate(
                        ['league_name' => $result->league_name, 'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_1,'mp'=>1,'w'=>0,'d'=>0,'l'=>1,'gf'=>team_score($result->team_1,$result->fixture_id),'ga'=>team_score($result->team_2,$result->fixture_id),'gd'=>team_score($result->team_1,$result->fixture_id)-team_score($result->team_2,$result->fixture_id)],
                        ['pts' => $result->team_1_points]
                    );
                }
                if ($result->team_2_scores == $result->team_1_scores) {
                    $team1 = Log::updateOrCreate(
                        ['league_name' => $result->league_name, 'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_1,'mp'=>1,'w'=>0,'d'=>1,'l'=>0,'gf'=>team_score($result->team_1,$result->fixture_id),'ga'=>team_score($result->team_2,$result->fixture_id),'gd'=>team_score($result->team_1,$result->fixture_id)-team_score($result->team_2,$result->fixture_id)],
                        ['pts' => $result->team_1_points]
                    );
                    $team2 = Log::updateOrCreate(
                        ['league_name' => $result->league_name, 'fixture_id'=>$result->fixture_id, 'team_name' => $result->team_2,'mp'=>1,'w'=>0,'d'=>1,'l'=>0,'gf'=>team_score($result->team_2,$result->fixture_id),'ga'=>team_score($result->team_1,$result->fixture_id),'gd'=>team_score($result->team_2,$result->fixture_id)-team_score($result->team_1,$result->fixture_id)],
                        ['pts' => $result->team_2_points]
                    );
                }
            }
    
            //creating Log Table Arranged
            $teams = Log::select('*', DB::raw('SUM(pts) as pts'), DB::raw('SUM(mp) as mp'), DB::raw('SUM(w) as w'), DB::raw('SUM(l) as l'), DB::raw('SUM(d) as d'), DB::raw('SUM(gf) as GF'), DB::raw('SUM(ga) as GA'), DB::raw('SUM(gd) as GD'))
            ->where('league_name',$leage)
            ->groupby('team_name')
            ->orderBy('pts','Desc')
            ->orderBy('GD','Desc')
            ->orderBy('team_name','Asc')
            ->get();
            // return view('Pages.log')->with(['teams'=>$teams]);
            // END TABLE

            // Start Fixture
            $fixtures = DB::table('fixtures')
         ->join('venues', 'fixtures.venue_id', '=', 'venues.id')
         ->select('fixtures.*', 'venues.*')
         ->orderBy('fixtures.match_date','ASC')
         ->get();
       
        // return view('Pages.fixtures')->with(['fixtures'=>$fixtures,'league_name'=>$leage]);
            // end fixture


            // Start Results
            $match_outcome = DB::table('results')
        ->join('fixtures', 'results.fixture_id', '=', 'fixtures.id')
        ->join('venues', 'fixtures.venue_id', '=', 'venues.id')
        ->select('results.*', 'fixtures.*', 'venues.*')
        ->get();

        $goals = Scores::select( DB::raw('SUM(no_of_goals) as goals'))->get();
        $players = Players::select( DB::raw('count(id) as players'))->get();
        $teamss = Teams::select( DB::raw('count(id) as teams'))->get();
        $league = League::all();

        return view('Pages.index')->with(['league'=>$league,'teamss'=>$teamss,'goals'=>$goals,'players'=>$players,'match_outcome'=>$match_outcome,'fixtures'=>$fixtures,'league_name'=>$leage,'teams'=>$teams]);
            // end Results
    }

    public function admin()
    {
       
    
       if (Auth::user()->user_type=="") {
           $leage = Auth::user()->league;
           $league = League::all();
           $id = Auth::user()->id;
           $team = Teams::where('owner_id', $id)->first();
           $team_name =DB::select("SELECT name FROM teams WHERE owner_id = '$id'");
           foreach ($team_name as $name) {
               $players = DB::select("SELECT * FROM players WHERE player_team = '$name->name'");
           }
       
           return view('Pages.admin')->with(['team'=>$team,'league'=>$league,'league_name'=>$leage,'players'=>$players]);
       }else{
        $league = League::all();
        $fixture = Fixtures::all();
        $referees = Referee::all();
        $venues = Venues::all();
        return view('Pages.admin')->with(['fixtures'=>$fixture,'referees'=>$referees,'venues'=>$venues,'league'=>$league,'leagues'=>$league]);
       }
            // end Results
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
