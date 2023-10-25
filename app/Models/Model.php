<?php

namespace App\Models;

use Database\DBConnection;
use PDO;

abstract class Model
{

  protected $db;
  protected $table;

  public function __construct(DBConnection $db)
  {
    $this->db = $db;
  }

  public function all(): array
  {
    return $this->query("SELECT * FROM {$this->table}");
  }

  public function findByCode(string $code): Model
  {
    return $this->query("SELECT * FROM {$this->table} WHERE code = ?", [$code], true);
  }

  public function findById(int $id): Model
  {
    return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
  }

  public function deleteByCode(string $code): bool
  {
    return $this->query("DELETE FROM {$this->table} WHERE code = ?", [$code]);
  }

  public function deleteById(int $id): bool
  {
    return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
  }

  public function updateByCode(string $code, array $data): bool
  {
    $sqlRequestPart = "";
    $i = 1;

    foreach ($data as $key => $value) {
      $comma = $i === count($data) ? " " : ", ";
      $sqlRequestPart .= "{$key} = :{$key}{$comma}";
      $i++;
    }

    return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE code = '$code'", $data);
  }

  public function updateById(int $id, array $data): bool
  {
    $sqlRequestPart = "";
    $i = 1;

    foreach ($data as $key => $value) {
      $comma = $i === count($data) ? " " : ", ";
      $sqlRequestPart .= "{$key} = :{$key}{$comma}";
      $i++;
    }

    return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE id = $id", $data);
  }

  // Creates a simple or prepared SQL request
  public function query(string $sql, array $param = null, bool $single = null)
  {
    $method = is_null($param) ? 'query' : 'prepare';

    if (strpos($sql, 'DELETE') === 0 || strpos($sql, 'UPDATE') === 0 || strpos($sql, 'INSERT') === 0) {
      $stmt = $this->db->getPDO()->$method($sql);
      $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
      return $stmt->execute($param);
    }

    $fetch = is_null($single) ? 'fetchAll' : 'fetch';

    $stmt = $this->db->getPDO()->$method($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

    if ($method === 'query') {
      return $stmt->$fetch();
    } else {
      $stmt->execute($param);
      return $stmt->$fetch();
    }
  }

  public function create(array $data)
  {
    $insert = '';
    $values = '';
    $i = 1;

    foreach ($data as $key => $value) {
      $comma = $i === count($data) ? "" : ", ";
      $insert .= "{$key}{$comma}";
      $values .= ":{$key}{$comma}";
      $i++;
    }

    return $this->query("INSERT INTO {$this->table} ($insert) VALUE ($values)", $data);
  }
}
