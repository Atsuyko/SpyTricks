<?php

namespace App\Controllers;

class MissionController
{

  public function index()
  {
    echo 'je suis la page mission';
  }

  public function show(string $code)
  {
    echo 'je suis la mission ' . $code;
  }
}
