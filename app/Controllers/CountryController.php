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

  //UPDATE
  public function edit(int $id)
  {
    $country = new Country($this->getDB());
    $country = $country->findById($id);

    return $this->view('country.edit', compact('country'));
  }

  public function update(int $id)
  {
    $country = new Country($this->getDB());

    $result = $country->updateById($id, $_POST);

    if ($result) {
      return header('Location: /spytricks/country');
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $country = new Country($this->getDB());
    $result = $country->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/country');
    }
  }
}
