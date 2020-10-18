@extends('layout')
@section('content')
    <h1>{{$league->title}}</h1>
    <p>{{$league->description}}</p>
    <p>{{$league->user->name}}</p>
<p>{{ $league->game}}</p>
<p>{{ $league->raceType}}</p>
<a href="{{ route('leaguePosts.index', ['league' => $league->id]) }}">Posts</a>
<a href="{{ route('leaguePosts.create', ['league' => $league->id]) }}">Create Post</a>
@endsection

