@extends('layouts.template')

@section('title', 'SoftConoce - Login')

@section('content')

  <h2>Login</h2>

  <div class="d-flex justify-content-center align-items-center h-75">
    <div class="card" style="width: fit-content;">
      <div class="card-body">

      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Usuario o Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Mantenerme conectado</label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
        <div class="mt-3">
          <a href="#">¿Has olvidado tu contraseña?</a>
        </div>
      </form>

      </div>
    </div>
  </div>

@endsection