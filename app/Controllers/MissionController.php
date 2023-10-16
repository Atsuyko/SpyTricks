<?php

namespace App\Controllers;

class MissionController extends Controller
{

  public function index()
  {
    return $this->view('mission.index');
  }

  public function show(string $code)
  {
    $req = $this->db->getPDO()->query('SELECT * from mission');
    $missions = $req->fetchAll();

    foreach ($missions as $mission) {
      echo $mission->title;
    }
    return $this->view('mission.show', compact('code'));
  }
}
