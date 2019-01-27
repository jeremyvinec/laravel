@extends ('layout.app')

@section('content')


<h1>User</h1>
<ul>
    @foreach($users as $user)
    <li>{{ $user->name}} ({{ $user->email}})</li>
    @endforeach
</ul>

@endsection