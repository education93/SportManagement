<?php

namespace App\Http\Controllers;


use App\Results;
use App\Scores;
use App\Score;
use App\Fixtures;
use App\League;
use App\Players;
use App\Database;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    
    //
    public function log($leage)
    {

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

        $league = League::all();

        return view('Pages.log')->with(['teams'=>$teams,'league'=>$league]);
    }
        

   
}
