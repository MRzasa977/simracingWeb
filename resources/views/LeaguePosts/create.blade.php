@extends('layout')
@section('content')
<form method="POST" action="{{ route('leaguePosts.store')}}">
    @csrf
        <div class="form-group">
            <label>Title</label>
        <input type="text" name='title' class="form-control"
         value="{{ old('title', $leaguePost->title ?? null)}}" />
        </div>
        <div class="form-group">
            <label>post</label>
        <input type="text" name='post' class="form-control"
         value="{{ old('post', $leaguePost->post ?? null)}}" />
        </div>
    <input type="" name="league_id" class="" value="{{ old('league_id', $league ?? null)}}" />
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit" class="btn btn-primary btn-block">Create!</button>
   </form>
@endsection