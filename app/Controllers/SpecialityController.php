<?php

namespace App\Controllers;

use App\Models\Speciality;

class SpecialityController extends Controller
{

  // READ
  public function index()
  {
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();

    return $this->view('speciality.index', compact('specialities'));
  }
}
