@extends('layout')
@section('content')
    @forelse ($leagues as $league)
        <p>
            <h3>
                <a href="{{ route('show', ['league' => $league->id]) }}"> {{ $league->title }} </a>
            </h3>
        
        </p>
    @empty
        <p>No leagues yet!</p>
    @endforelse
@endsection