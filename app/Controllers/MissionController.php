<?php

namespace App\Controllers;

use App\Models\Mission;

class MissionController extends Controller
{

  public function index()
  {
    $mission = new Mission($this->getDB());
    $missions = $mission->all();

    return $this->view('mission.index', compact('missions'));
  }

  public function show(string $code)
  {
    $mission = new Mission($this->getDB());
    $mission = $mission->findByCode($code);

    return $this->view('mission.show', compact('mission'));
  }
}
