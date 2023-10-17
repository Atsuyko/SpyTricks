<?php

namespace App\Models;

class Hideout extends Model
{

  protected $table = 'hideout';
  private $id_country;

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN hideout AS h ON h.id_country = c.id
      WHERE c.id = ?",
      $this->id_country
    );
  }
}
