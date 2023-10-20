<?php

namespace App\Controllers;

use App\Models\Target;
use App\Models\Country;

class TargetController extends Controller
{

  // READ
  public function index()
  {
    $target = new Target($this->getDB());
    $targets = $target->all();

    return $this->view('target.index', compact('targets'));
  }

  //UPDATE
  public function edit(string $code)
  {
    $target = new Target($this->getDB());
    $target = $target->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('target.edit', compact('target', 'countries'));
  }

  public function update(string $code)
  {
    $target = new Target($this->getDB());

    $result = $target->updateByCode($code, $_POST);

    if ($result) {
      return header('Location: /spytricks/target');
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $target = new Target($this->getDB());
    $result = $target->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/target');
    }
  }
}
