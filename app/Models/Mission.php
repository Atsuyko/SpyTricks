<?php

namespace App\Models;

use DateTime;

class Mission extends Model
{

  protected $table = 'mission';
  private string $code;
  private string $title;
  private string $description;
  private int $id_country;
  private string $type;
  private string $status;
  private int $id_spe;
  private string $start;
  private string $end;

  public function getCode(): string
  {
    return $this->code;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getIdCountry(): int
  {
    return $this->id_country;
  }

  public function getType(): string
  {
    return $this->type;
  }

  public function getStatus(): string
  {
    return $this->status;
  }

  public function getIdSpe(): int
  {
    return $this->id_spe;
  }

  public function getStart(): string
  {
    return $this->start;
  }

  public function getEnd(): string
  {
    return $this->end;
  }

  public function getStartFormat(): string
  {
    return (new DateTime($this->start))->format('d/m/Y');
  }

  public function getEndFormat(): string
  {
    return (new DateTime($this->end))->format('d/m/Y');
  }

  public function getAgent()
  {
    return $this->query(
      "
      SELECT * FROM agent AS agt 
      INNER JOIN mission_agent AS ma ON ma.id_agent = agt.id
      WHERE ma.code_mission = ?",
      [$this->code]
    );
  }

  public function getContact()
  {
    return $this->query(
      "
      SELECT * FROM contact AS con 
      INNER JOIN mission_contact AS mcon ON mcon.code_contact = con.code
      WHERE mcon.code_mission = ?",
      [$this->code]
    );
  }

  public function getTarget()
  {
    return $this->query(
      "
      SELECT * FROM target AS t 
      INNER JOIN mission_target AS mt ON mt.code_target = t.code
      WHERE mt.code_mission = ?",
      [$this->code]
    );
  }

  public function getHideout()
  {
    return $this->query(
      "
      SELECT * FROM hideout AS h 
      INNER JOIN mission_hideout AS mh ON mh.code_hideout = h.code
      WHERE mh.code_mission = ?",
      [$this->code]
    );
  }

  public function getCountry()
  {
    return $this->query(
      "
      SELECT * FROM country AS c
      INNER JOIN mission AS m ON m.id_country = c.id
      WHERE c.id = ?",
      [$this->id_country]
    );
  }

  public function getSpe()
  {
    return $this->query(
      "
      SELECT * FROM speciality AS s
      INNER JOIN mission AS m ON m.id_spe = s.id
      WHERE s.id = ?",
      [$this->id_spe]
    );
  }

  public function updateHideout(string $code, ?array $relations = null)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_hideout WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    foreach ($relations as $hideoutCode) {
      $stmt = $this->db->getPDO()->prepare("INSERT INTO mission_hideout (code_mission, code_hideout) VALUES (?, ?)");
      $stmt->execute([$code, $hideoutCode]);
    }

    if ($result) {
      return true;
    }
  }

  public function updateAgent(string $code, ?array $relations = null)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_agent WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    foreach ($relations as $agentId) {
      $stmt = $this->db->getPDO()->prepare("INSERT INTO mission_agent (code_mission, id_agent) VALUES (?, ?)");
      $stmt->execute([$code, $agentId]);
    }

    if ($result) {
      return true;
    }
  }

  public function updateTarget(string $code, ?array $relations = null)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_target WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    foreach ($relations as $targetCode) {
      $stmt = $this->db->getPDO()->prepare("INSERT INTO mission_target (code_mission, code_target) VALUES (?, ?)");
      $stmt->execute([$code, $targetCode]);
    }

    if ($result) {
      return true;
    }
  }

  public function updateContact(string $code, ?array $relations = null)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_contact WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    foreach ($relations as $contactCode) {
      $stmt = $this->db->getPDO()->prepare("INSERT INTO mission_contact (code_mission, code_contact) VALUES (?, ?)");
      $stmt->execute([$code, $contactCode]);
    }

    if ($result) {
      return true;
    }
  }

  public function deleteHideout(string $code)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_hideout WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    if ($result) {
      return true;
    }
  }

  public function deleteAgent(string $code)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_agent WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    if ($result) {
      return true;
    }
  }

  public function deleteTarget(string $code)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_target WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    if ($result) {
      return true;
    }
  }

  public function deleteContact(string $code)
  {
    $stmt = $this->db->getPDO()->prepare("DELETE FROM mission_contact WHERE code_mission = ?");
    $result = $stmt->execute([$code]);

    if ($result) {
      return true;
    }
  }
}
