<?php

namespace App\Models;

class Country extends Model
{

  protected $table = 'country';
  private int $id;
  private string $nation;
  private string $nationality;

  public function getId(): int
  {
    return $this->id;
  }

  public function getNation(): string
  {
    return $this->nation;
  }

  public function getNationality(): string
  {
    return $this->nationality;
  }
}
