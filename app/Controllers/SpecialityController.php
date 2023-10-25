<?php

namespace App\Controllers;

use App\Models\Speciality;

class SpecialityController extends Controller
{
  //CREATE
  public function createGet()
  {
    return $this->view('speciality.create');
  }

  public function createPost()
  {
    $speciality = new Speciality($this->getDB());
    $result = $speciality->create($_POST);

    if ($result) {
      return header('Location: /spytricks/speciality');
    }
  }

  // READ
  public function index()
  {
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();

    return $this->view('speciality.index', compact('specialities'));
  }

  //UPDATE
  public function edit(int $id)
  {
    $speciality = new Speciality($this->getDB());
    $speciality = $speciality->findById($id);

    return $this->view('speciality.edit', compact('speciality'));
  }

  public function update(int $id)
  {
    $speciality = new Speciality($this->getDB());

    $result = $speciality->updateById($id, $_POST);

    if ($result) {
      return header('Location: /spytricks/speciality');
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $speciality = new Speciality($this->getDB());
    $result = $speciality->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/speciality');
    }
  }
}
