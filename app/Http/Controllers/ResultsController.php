<?php

namespace App\Http\Controllers;

use App\Results;
use App\Scores;
use App\Fixtures;
use App\Players;
use App\Database;
use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    //
    public function results($leage)
    {
        // $results = Results::where('league_name', '=', $leage)->groupby('fixture_id')->get();
        $results = DB::table('results')
        ->join('fixtures', 'results.fixture_id', '=', 'fixtures.id')
        ->join('venues', 'fixtures.venue_id', '=', 'venues.id')
        ->select('results.*','results.id as id_no', 'fixtures.*', 'venues.*')
        ->get();
        $league = League::all();
        
    
        return view('Pages.matchresult')->with(['results'=>$results,'league'=>$league]);
    }
}
