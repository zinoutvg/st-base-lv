<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

  public function __invoke() {
    $items = [
      'Matriz de Riesgo',
      'Scoring de Riesgo',
      'Reporte de Operaciones',
      'Consulta de listas',
      'Canal de Denuncia',
      'Mis Cursos'
    ];
    return view(
      'pages.home',
      [
        'courses' => $items
      ]
    );
  }

}
