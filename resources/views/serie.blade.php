@extends('layout.app')

@section('content')

<div class="row">
    <div class="col">
    <h1>{{$serie->title}}</h1>
        <p><strong>Synopsis : </strong>{{$serie->summary}}</p>
    </div>

</div>
<div class="row">
    <div class="col">

    @foreach($serie->seasons as $season)

         <h1> Saison {{$season->season_number}}</h1>
            @foreach($season->episodes as $an_episode)
                <p> <a href="{{route('episode',['episode_id'=>$an_episode->id])}}">Episode {{$an_episode->episode_number}} - {{$an_episode->title}}</a> </p>

            @endforeach

    @endforeach
    </div>
</div>

@endsection