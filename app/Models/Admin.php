<?php

namespace App\Models;

class Admin extends Model
{

  protected $table = 'admin';
  private int $id;
  private string $lastname;
  private string $firstname;
  private string $email;

  public function getId(): int
  {
    return $this->id;
  }

  public function getLastname(): string
  {
    return $this->lastname;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function getEmail(): string
  {
    return $this->email;
  }
}
