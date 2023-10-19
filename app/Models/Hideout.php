<?php

namespace App\Models;

class Hideout extends Model
{

  protected $table = 'hideout';
  private string $code;
  private string $address;
  private string $type;
  private int $id_country;

  public function getCode(): string
  {
    return $this->code;
  }

  public function getAddress(): string
  {
    return $this->address;
  }

  public function getType(): string
  {
    return $this->type;
  }


  public function getIdCountry()
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
