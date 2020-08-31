<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use App\Scores;
use App\Players;
use App\Results;

class Score
{
    public static function goal_scorer($team,$fixture_id)
    {
        $results = Scores::where('team_name', '=', $team)
                        -> where('fixture_id', '=', $fixture_id)
                        ->join('players', 'scores.player_id', '=', 'players.id')
                        ->get();

                        foreach ($results as $result)
                        {
                            echo "<li>".$result->full_name." (".$result->jersey_no.")</li>";
                        }
    }

    public static function team_score($team,$fixture_id)
    {
        $results = Scores::select( DB::raw('SUM(no_of_goals) as goals'))
                            ->where('team_name', '=', $team)
                        -> where('fixture_id', '=', $fixture_id)
                        ->get();

                        foreach ($results as $result) {
                            if($result->goals==""){
                                echo "0";
                            }else{
                                echo $result->goals;
                            }
                        }
    }

    public static function win_lose_draw($team,$fixture_id)
    {
        $results = Scores::select( DB::raw('SUM(no_of_goals) as goals'))
                            ->where('team_name', '=', $team)
                        -> where('fixture_id', '=', $fixture_id)
                        ->get();
                        

                        foreach ($results as $result) {
                            if($result->goals==""){
                                return"0";
                            }else{
                                return $result->goals;
                            }
                        }
    
    }


   
}
