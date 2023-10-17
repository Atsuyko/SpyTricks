<?php

namespace App\Models;

use DateTime;

class Mission extends Model
{

  protected $table = 'mission';
  private $start;
  private $end;
  private $code;
  private $id_country;

  public function getCode(): string
  {
    return $this->code;
  }

  public function getStart(): string
  {
    return (new DateTime($this->start))->format('d/m/Y');
  }

  public function getEnd(): string
  {
    return (new DateTime($this->end))->format('d/m/Y');
  }

  public function getAgent()
  {
    return $this->query(
      "
      SELECT * FROM agent AS agt 
      INNER JOIN mission_agent AS ma ON ma.id_agent = agt.id
      WHERE ma.code_mission = ?",
      $this->code
    );
  }

  public function getContact()
  {
    return $this->query(
      "
      SELECT * FROM contact AS con 
      INNER JOIN mission_contact AS mcon ON mcon.code_contact = con.code
      WHERE mcon.code_mission = ?",
      $this->code
    );
  }

  public function getTarget()
  {
    return $this->query(
      "
      SELECT * FROM target AS t 
      INNER JOIN mission_target AS mt ON mt.code_target = t.code
      WHERE mt.code_mission = ?",
      $this->code
    );
  }

  public function getHideout()
  {
    return $this->query(
      "
      SELECT * FROM hideout AS h 
      INNER JOIN mission_hideout AS mh ON mh.code_hideout = h.code
      WHERE mh.code_mission = ?",
      $this->code
    );
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN mission AS m ON m.id_country = c.id
      WHERE c.id = ?",
      $this->id_country
    );
  }
}
