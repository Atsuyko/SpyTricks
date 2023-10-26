<?php

namespace App\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    return $this->view('country.create');
  }

  public function createPost()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $result = $country->create($_POST);

    if ($result) {
      return header('Location: /spytricks/country');
    }
  }

  // READ 
  public function index()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $countries = $country->pagination();

    $total = count($country->all());
    $pages = ceil($total / 3);

    return $this->view('country.index', compact('countries', 'total', 'pages'));
  }

  //UPDATE
  public function edit(int $id)
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $country = $country->findById($id);

    return $this->view('country.edit', compact('country'));
  }

  public function update(int $id)
  {
    $this->isConnected();

    $country = new Country($this->getDB());

    $result = $country->updateById($id, $_POST);

    if ($result) {
      return header('Location: /spytricks/country');
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $result = $country->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/country');
    }
  }
}
