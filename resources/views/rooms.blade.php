@extends('layout')

@section('content')
  @foreach ($rooms as $room)
    Stanza: {{$room['n_stanza']}}<br>
    Tipologia:{{$room['tipologia']}}<br>
  @endforeach
@endsection
