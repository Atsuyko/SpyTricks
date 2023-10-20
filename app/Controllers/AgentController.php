<?php

namespace App\Controllers;

use App\Models\Agent;
use App\Models\Country;

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

    return $this->view('agent.edit', compact('agent', 'countries'));
  }

  public function update(int $id)
  {
    $agent = new Agent($this->getDB());
    $result = $agent->updateById($id, $_POST);

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
