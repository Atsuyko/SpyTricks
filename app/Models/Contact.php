<?php

namespace App\Models;

use DateTime;

class Contact extends Model
{

  protected $table = 'contact';
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
      INNER JOIN contact AS co ON co.id_country = c.id
      WHERE c.id = ?",
      $this->id_country
    );
  }
}
