<?php

namespace App\Controllers;

use App\Models\Country;

class CountryController extends Controller
{

  // READ 
  public function index()
  {
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('country.index', compact('countries'));
  }
}
