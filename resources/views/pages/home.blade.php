@extends('layouts.template')

@section('title', 'Home')

@section('content')

  <h2>Bienvenido a Conoce - Software de Prevención de Riesgos</h2>

  <div class="card">
    <div class="card-body d-flex justify-content-around flex-wrap">

      @foreach ($courses as $course)
      <div class="text-center p-4 home--card">
        <img src="{{ $course['imgUrl'] }}" />
        <h5>{{ $course['title'] }}</h5>
        <label>{{ $course['description'] }}</label>
      </div>
      @endforeach

    </div>
  </div>

@endsection