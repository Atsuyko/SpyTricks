<?php

namespace App\Controllers;

use App\Models\Country;
use App\Models\Hideout;

class HideoutController extends Controller
{

  // READ 
  public function index()
  {
    $hideout = new Hideout($this->getDB());
    $hideouts = $hideout->all();

    return $this->view('hideout.index', compact('hideouts'));
  }

  //UPDATE
  public function edit(string $code)
  {
    $hideout = new Hideout($this->getDB());
    $hideout = $hideout->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('hideout.edit', compact('hideout', 'countries'));
  }

  public function update(string $code)
  {
    $hideout = new Hideout($this->getDB());

    $result = $hideout->updateByCode($code, $_POST);

    if ($result) {
      return header('Location: /spytricks/hideout');
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $hideout = new Hideout($this->getDB());
    $result = $hideout->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/hideout');
    }
  }
}
