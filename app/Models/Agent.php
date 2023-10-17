<?php

namespace App\Models;

use DateTime;

class Agent extends Model
{

  protected $table = 'agent';
  private $dob;
  private $id_country;
  private $id;

  public function getId()
  {
    return $this->id;
  }

  public function getDob(): string
  {
    return (new DateTime($this->dob))->format('d/m/Y');
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN agent AS a ON a.id_country = c.id
      WHERE c.id = ?",
      $this->id_country
    );
  }

  public function getSpe()
  {
    return $this->query(
      "
      SELECT * FROM speciality AS s
      INNER JOIN agent_spe AS aspe ON aspe.id_spe = s.id
      WHERE aspe.id_agent = ?",
      $this->id
    );
  }
}
