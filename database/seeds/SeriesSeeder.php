<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $twd_id  = DB::table('series')->insertGetId([
            'title'=>'The Walking Derp',
            'summary'=>'Des gens marchent.'
        ]);
      // $twd = DB::table('series')->where('title','The Walking Derp')->first();
       //$twd->id;
        $twd_s1_id  = DB::table('seasons')->insertGetId([
            'serie_id'=>$twd_id,
            'season_number'=>1
        ]);
        $twd_s2_id  = DB::table('seasons')->insertGetId([
            'serie_id'=>$twd_id,
            'season_number'=>2
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$twd_s1_id,
            'episode_number'=>1,
            'title'=>'Les gens qui marchent arrivent à la ferme'
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$twd_s1_id,
            'episode_number'=>2,
            'title'=>'Les gens glandent à la ferme'
        ]);


        DB::table('episodes')->insertGetId([
            'season_id'=>$twd_s2_id,
            'episode_number'=>1,
            'title'=>'Les gens qui marchent arrivent à la ferme saison 2'
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$twd_s2_id,
            'episode_number'=>2,
            'title'=>'Les gens glandent à la ferme saison 2'
        ]);



        /* Deuxieme série*/

        $bb_id  = DB::table('series')->insertGetId([
            'title'=>'Breaking Bad',
            'summary'=>"la chimie, c'est badass"
        ]);
        $bb_s1_id  = DB::table('seasons')->insertGetId([
            'serie_id'=>$bb_id,
            'season_number'=>1
        ]);
        $bb_s2_id  = DB::table('seasons')->insertGetId([
            'serie_id'=>$bb_id,
            'season_number'=>2
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$bb_s1_id,
            'episode_number'=>1,
            'title'=>"Le cancer c'est nul"
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$bb_s1_id,
            'episode_number'=>2,
            'title'=>"Le cancer c'est nul, fuck your eyebrows"
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$bb_s2_id,
            'episode_number'=>1,
            'title'=>"Le cancer c'est nul, mais la meth c'est bien"
        ]);
        DB::table('episodes')->insertGetId([
            'season_id'=>$bb_s2_id,
            'episode_number'=>2,
            'title'=>"Jesse !!!"
        ]);
    }
}
