<?php

namespace App\Controllers;

use App\Models\Agent;
use App\Models\Country;
use App\Models\Speciality;

class AgentController extends Controller
{
  //CREATE
  public function createGet()
  {
    $country = new Country($this->getDB());
    $countries = $country->all();
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();

    return $this->view('agent.create', compact('countries', 'specialities'));
  }

  public function createPost()
  {
    $agent = new Agent($this->getDB());

    if (isset($_POST['specialities'])) {
      $specialities = array_pop($_POST);
    }

    $resultAgent = $agent->create($_POST);

    if (isset($specialities)) {
      $resultSpe = $agent->createSpe($specialities);
    }

    if ($resultAgent) {
      if ((isset($resultSpe) && $resultSpe) || !isset($resultSpe)) {
        return header('Location: /spytricks/agent');
      }
    }
  }

  // READ 
  public function index()
  {
    $agent = new Agent($this->getDB());
    $agents = $agent->all();

    return $this->view('agent.index', compact('agents'));
  }

  //UPDATE
  public function edit(int $id)
  {
    $agent = new Agent($this->getDB());
    $agent = $agent->findById($id);
    $country = new Country($this->getDB());
    $countries = $country->all();
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();

    return $this->view('agent.edit', compact('agent', 'countries', 'specialities'));
  }

  public function update(int $id)
  {
    $agent = new Agent($this->getDB());

    if (isset($_POST['specialities'])) {
      $specialities = array_pop($_POST);
    }

    $resultAgent = $agent->updateById($id, $_POST);

    if (isset($specialities)) {
      $resultSpe = $agent->updateSpe($id, $specialities);
    } else {
      $agent->deleteSpe($id);
    }

    if ($resultAgent) {
      if ((isset($resultSpe) && $resultSpe) || !isset($resultSpe)) {
        return header('Location: /spytricks/agent');
      }
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $agent = new Agent($this->getDB());
    $agent->deleteSpe($id);
    $result = $agent->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/agent');
    }
  }
}
