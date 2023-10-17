<?php

namespace App\Controllers;

class MissionController extends Controller
{

  public function index()
  {
    $stmt = $this->db->getPDO()->query('SELECT * FROM mission');
    $missions = $stmt->fetchAll();


    return $this->view('mission.index', compact('missions'));
  }

  public function show(string $code)
  {
    $stmt = $this->db->getPDO()->prepare('SELECT * FROM mission WHERE code = ?');
    $stmt->execute([$code]);
    $mission = $stmt->fetch();

    return $this->view('mission.show', compact('mission'));
  }
}
