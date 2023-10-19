<?php

namespace App\Models;

use DateTime;

class Target extends Model
{

  protected $table = 'target';
  private string $code;
  private string $lastname;
  private string $firstname;
  private $dob;
  private $id_country;

  public function getCode(): string
  {
    return $this->code;
  }

  public function getLastname(): string
  {
    return $this->lastname;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }


  public function getDob(): string
  {
    return (new DateTime($this->dob))->format('d/m/Y');
  }

  public function getIdCountry()
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
