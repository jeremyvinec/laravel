<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actor = new Actor();
        $actor->name = 'JCVD';
        $actor->save();

        Actor::create([
            'name'=> 'Kevin Spacey'
        ]);

        foreach(App\Episode::get() as $episode){
            $episode->actors()->attache(rand(1,5));
        }
    }
}
