<?php

namespace App\Models;

use DateTime;

class Admin extends Model
{

  protected $table = 'admin';
  private int $id;
  private string $lastname;
  private string $firstname;
  private string $email;
  private string $password;
  private string $doc;


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

  public function getPassword(): string
  {
    return $this->password;
  }

  public function getDoc(): string
  {
    return (new DateTime($this->doc))->format('d/m/Y');
  }

  public function getAdmin(string $email): Admin
  {
    return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
  }
}
