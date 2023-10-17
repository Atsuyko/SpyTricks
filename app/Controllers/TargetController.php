<?php

namespace App\Controllers;

use App\Models\Target;

class TargetController extends Controller
{

  public function index()
  {
    $target = new Target($this->getDB());
    $targets = $target->all();

    return $this->view('target.index', compact('targets'));
  }
}
