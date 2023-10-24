<?php

namespace App\Models;

use DateTime;

class Agent extends Model
{

  protected $table = 'agent';
  private int $id;
  private string $lastname;
  private string $firstname;
  private string $dob;
  private int $id_country;


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
      INNER JOIN agent AS a ON a.id_country = c.id
      WHERE c.id = ?",
      [$this->id_country]
    );
  }

  public function getSpe()
  {
    return $this->query(
      "
      SELECT * FROM speciality AS s
      INNER JOIN agent_spe AS aspe ON aspe.id_spe = s.id
      WHERE aspe.id_agent = ?",
      [$this->id]
    );
  }

  public function updateSpe(int $id, ?array $relations = null)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM agent_spe WHERE id_agent = ?");
    $result = $stmt->execute([$id]);

    foreach ($relations as $speId) {
      $stmt = $this->db->getPDO()->prepare("INSERT INTO agent_spe (id_agent, id_spe) VALUES (?, ?)");
      $stmt->execute([$id, $speId]);
    }

    if ($result) {
      return true;
    }
  }

  public function deleteSpe(int $id)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM agent_spe WHERE id_agent = ?");
    $result = $stmt->execute([$id]);

    if ($result) {
      return true;
    }
  }
}
