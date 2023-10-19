<?php

namespace App\Controllers;

use App\Models\Agent;

class AgentController extends Controller
{

  // READ 
  public function index()
  {
    $agent = new Agent($this->getDB());
    $agents = $agent->all();

    return $this->view('agent.index', compact('agents'));
  }
}
