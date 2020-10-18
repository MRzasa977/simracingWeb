@extends('layout')
@section('content')
<form id="form" method="POST" action="{{ route('leagues.store') }}">
    @csrf
    
        <div class="form-group">
            <label>Title</label>
        <input type="text" name='title' class="form-control"
         value="{{ old('title', $league->title ?? null)}}" />
        </div>
        <div class="form-group">
            <label>Description</label>
        <input type="text" name='description' class="form-control"
         value="{{ old('description', $league->description ?? null)}}" />
        </div>
        <label for="game">Choose a game:</label>
        <select name="game" id="game">
            <option value=""></option>
            <option value="Rfactor 2">Rfactor 2</option>
            <option value="Assetto Corsa Competizione">Assetto Corsa Competizione</option>
        </select>
        <div class="raceType">
        <label for="raceType">Choose a type of the race:</label>
        <select name="raceType" id="raceType" class="raceType">
            <option value=""></option>
            <option value="Sprint">Sprint</option>
            <option value="Endurance">Endurance</option>
        </select>
        </div>
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
   <script>
       $(document).ready(function(){
           $('.raceType').hide();
           $('#game').change(function(){
               if($('#game').children('option:selected').val() === '')
                    $('.raceType').hide();
                else
                    $('.raceType').show();
                    console.log($('.raceType').children("option:selected").val());
            console.log($('#game').children("option:selected").val());
           })

       })
   </script>
@endsection
