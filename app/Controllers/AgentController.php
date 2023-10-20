<?php

namespace App\Controllers;

use App\Models\Agent;
use App\Models\Country;
use App\Models\Speciality;

class AgentController extends Controller
{

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

    $specialities = array_chunk($_POST, 4);
    $specialities = array_pop($specialities);
    array_splice($_POST, 4);

    $result = $agent->updateSpe($id, $_POST, $specialities);

    if ($result) {
      return header('Location: /spytricks/agent');
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $agent = new Agent($this->getDB());
    $result = $agent->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/agent');
    }
  }
}
