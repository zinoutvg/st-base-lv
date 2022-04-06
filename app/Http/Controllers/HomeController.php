<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

  public function __invoke() {
    $items = [
      array(
        'title' => 'Matriz de Riesgo',
        'description' => 'Scoring de Riesgo',
        'imgUrl' => 'https://soft.conoce.com.pe/wp-content/uploads/2020/11/Matriz-de-riesgo.jpg'
      )
    ];
    return view(
      'pages.home',
      [
        'courses' => $items
      ]
    );
  }

}
