<?php

namespace App\Controllers;

use App\Models\Mission;

class MissionController extends Controller
{

  // READ 
  public function index()
  {
    $mission = new Mission($this->getDB());
    $missions = $mission->all();

    return $this->view('mission.index', compact('missions'));
  }

  // READ - Retrieve a Mission instance
  public function show(string $code)
  {
    $mission = new Mission($this->getDB());
    $mission = $mission->findByCode($code);

    return $this->view('mission.show', compact('mission'));
  }

  // DELETE
  public function delete(string $code)
  {
    $mission = new Mission($this->getDB());
    $result = $mission->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/mission');
    }
  }
}
