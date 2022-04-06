@extends('layouts.template')

@section('title', 'Home')

@section('content')

  <h2>Bienvenido a Conoce - Software de Prevención de Riesgos</h2>

  <div class="card">
    <div class="card-body">

      <div class="text-center p-4" style="width: fit-content">
        <img src="{{ $courses[0]['imgUrl'] }}" /> 
        <h5>{{ $courses[0]['title'] }}</h5>
        <label>{{ $courses[0]['description'] }}</label>
      </div>

    </div>
  </div>

@endsection