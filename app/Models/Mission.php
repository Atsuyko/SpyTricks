<?php

namespace App\Models;

use DateTime;

class Mission extends Model
{

  protected $table = 'mission';
  private string $code;
  private string $title;
  private string $description;
  private int $id_country;
  private string $type;
  private string $status;
  private int $id_spe;
  private string $start;
  private string $end;

  public function getCode(): string
  {
    return $this->code;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getIdCountry(): int
  {
    return $this->id_country;
  }

  public function getType(): string
  {
    return $this->type;
  }

  public function getStatus(): string
  {
    return $this->status;
  }

  public function getIdSpe(): int
  {
    return $this->id_spe;
  }

  public function getStart(): string
  {
    return $this->start;
  }

  public function getEnd(): string
  {
    return $this->end;
  }

  public function getStartFormat(): string
  {
    return (new DateTime($this->start))->format('d/m/Y');
  }

  public function getEndFormat(): string
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
      [$this->code]
    );
  }

  public function getContact()
  {
    return $this->query(
      "
      SELECT * FROM contact AS con 
      INNER JOIN mission_contact AS mcon ON mcon.code_contact = con.code
      WHERE mcon.code_mission = ?",
      [$this->code]
    );
  }

  public function getTarget()
  {
    return $this->query(
      "
      SELECT * FROM target AS t 
      INNER JOIN mission_target AS mt ON mt.code_target = t.code
      WHERE mt.code_mission = ?",
      [$this->code]
    );
  }

  public function getHideout()
  {
    return $this->query(
      "
      SELECT * FROM hideout AS h 
      INNER JOIN mission_hideout AS mh ON mh.code_hideout = h.code
      WHERE mh.code_mission = ?",
      [$this->code]
    );
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN mission AS m ON m.id_country = c.id
      WHERE c.id = ?",
      [$this->id_country]
    );
  }

  public function getSpe()
  {
    return $this->query(
      "
      SELECT * FROM speciality AS s
      INNER JOIN mission AS m ON m.id_spe = s.id
      WHERE s.id = ?",
      [$this->id_spe]
    );
  }
}
