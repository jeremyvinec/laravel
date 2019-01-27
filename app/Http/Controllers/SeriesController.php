<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Season;
use App\Serie;
use App\Episode;

class SeriesController extends Controller
{
    public function getSerie($serie_id){

            //DB..
    /* $serie= Serie::where('id',$serie_id)
            ->firstOrFail();
    */

        $serie = Serie::with('seasons.episodes.actors')->findOrFail($serie_id);
      //$serie = Serie::findOrFail($serie_id);
      // dd($serie);
       // if (!$serie)abort(404);

        $data=[
            'serie'=>$serie,
            'page_title'=>$serie->title,

        ];

        return view('serie',$data);
    }


    public function getSeason($season_id){

        //DB..
        /* $serie= Serie::where('id',$serie_id)
                ->firstOrFail();
        */
        $season = Season::findOrFail($season_id);
        // dd($serie);
        // if (!$serie)abort(404);

        $data=[
            'season_number'=>$season->season_number,
            'season_id'=>$season->id,
            'season'=>$season

        ];

        return view('season',$data);
    }

    public function getEpisode($episode_id){

        //DB..
        /* $serie= Serie::where('id',$serie_id)
                ->firstOrFail();
        */
        $episode = Episode::findOrFail($episode_id);
        // dd($serie);
        // if (!$serie)abort(404);

        $data=[
            'episode_number'=>$episode->episode_number,
            'episode_id'=>$episode->id,
            'episode'=>$episode

        ];

        return view('episode',$data);
    }

}
