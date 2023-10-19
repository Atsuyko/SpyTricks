<?php

namespace App\Models;

class Speciality extends Model
{

  protected $table = 'speciality';
  private int $id;
  private string $spe;

  public function getId(): int
  {
    return $this->id;
  }

  public function getSpe(): string
  {
    return $this->spe;
  }
}
