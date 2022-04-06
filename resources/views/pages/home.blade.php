@extends('layouts.template')

@section('title', 'Home')

@section('content')

  <h2>Bienvenido a Conoce - Software de Prevención de Riesgos</h2>

  <div class="card">
    <div class="card-body d-flex justify-content-between flex-wrap">

      @foreach ($courses as $course)
      <div class="text-center p-4" style="width: fit-content; width: 300px;">
        <img src="{{ $course['imgUrl'] }}" style="width: -webkit-fill-available; height: 170px;" /> 
        <h5>{{ $course['title'] }}</h5>
        <label>{{ $course['description'] }}</label>
      </div>
      @endforeach

    </div>
  </div>

@endsection