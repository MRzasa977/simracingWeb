@extends('layout')
@section('content')
    @forelse ($leaguePosts as $post)
        <p>
            <h3>
                <a href="{{ route('leaguePosts.show', ['leaguePostID' => $post->id]) }}"> {{ $post->title }} </a>
            </h3>
        
        </p>
    @empty
        <p>No leagues yet!</p>
    @endforelse
@endsection