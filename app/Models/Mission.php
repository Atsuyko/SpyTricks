<?php

namespace App\Models;

use DateTime;

class Mission extends Model
{

  protected $table = 'mission';
  private $start;
  private $end;
  private $code;

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
      INNER JOIN mission AS m ON ma.code_mission = m.code
      WHERE m.code = ?",
      $this->code
    );
  }
}
