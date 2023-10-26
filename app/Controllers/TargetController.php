<?php

namespace App\Controllers;

use App\Models\Target;
use App\Models\Country;

class TargetController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('target.create', compact('countries'));
  }

  public function createPost()
  {
    $this->isConnected();

    $target = new Target($this->getDB());
    $result = $target->create($_POST);

    if ($result) {
      return header('Location: /spytricks/target');
    }
  }

  // READ
  public function index()
  {
    $this->isConnected();

    $target = new Target($this->getDB());
    $targets = $target->pagination();

    $total = count($target->all());
    $pages = ceil($total / 3);

    return $this->view('target.index', compact('targets', 'total', 'pages'));
  }

  //UPDATE
  public function edit(string $code)
  {
    $this->isConnected();

    $target = new Target($this->getDB());
    $target = $target->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('target.edit', compact('target', 'countries'));
  }

  public function update(string $code)
  {
    $this->isConnected();

    $target = new Target($this->getDB());

    $result = $target->updateByCode($code, $_POST);

    if ($result) {
      return header('Location: /spytricks/target');
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $this->isConnected();

    $target = new Target($this->getDB());
    $result = $target->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/target');
    }
  }
}
