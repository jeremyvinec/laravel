@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Saison {{$season_number}} de la serie {{$season->serie->title}}</h1>
                @foreach($season->episodes as $an_episode)

                <p> <a href="{{route('episode',['episode_id'=>$an_episode->id])}}">Episode {{$an_episode->episode_number}}</a> </p>

                @endforeach
        </div>
    </div>

@endsection