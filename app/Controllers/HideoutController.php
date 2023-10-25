<?php

namespace App\Controllers;

use App\Models\Country;
use App\Models\Hideout;

class HideoutController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('hideout.create', compact('countries'));
  }

  public function createPost()
  {
    $this->isConnected();

    $hideout = new Hideout($this->getDB());
    $result = $hideout->create($_POST);

    if ($result) {
      return header('Location: /spytricks/hideout');
    }
  }

  // READ 
  public function index()
  {
    $this->isConnected();

    $hideout = new Hideout($this->getDB());
    $hideouts = $hideout->all();

    return $this->view('hideout.index', compact('hideouts'));
  }

  //UPDATE
  public function edit(string $code)
  {
    $this->isConnected();

    $hideout = new Hideout($this->getDB());
    $hideout = $hideout->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('hideout.edit', compact('hideout', 'countries'));
  }

  public function update(string $code)
  {
    $this->isConnected();

    $hideout = new Hideout($this->getDB());

    $result = $hideout->updateByCode($code, $_POST);

    if ($result) {
      return header('Location: /spytricks/hideout');
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $this->isConnected();

    $hideout = new Hideout($this->getDB());
    $result = $hideout->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/hideout');
    }
  }
}
