<?php

namespace App\Controllers;

use App\Models\Hideout;

class HideoutController extends Controller
{

  public function index()
  {
    $hideout = new Hideout($this->getDB());
    $hideouts = $hideout->all();

    return $this->view('hideout.index', compact('hideouts'));
  }
}
