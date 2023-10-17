<?php

namespace App\Models;

use DateTime;

class Target extends Model
{

  protected $table = 'target';
  private $dob;
  private $id_country;

  public function getDob(): string
  {
    return (new DateTime($this->dob))->format('d/m/Y');
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN target AS t ON t.id_country = c.id
      WHERE c.id = ?",
      $this->id_country
    );
  }
}
