<?php

namespace App\Models;

use DateTime;

class Contact extends Model
{

  protected $table = 'contact';
  private string $code;
  private string $lastname;
  private string $firstname;
  private string $dob;
  private int $id_country;

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

  public function getIdCountry(): int
  {
    return $this->id_country;
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN contact AS co ON co.id_country = c.id
      WHERE c.id = ?",
      [$this->id_country]
    );
  }
}
