<?php

namespace App\Controllers;

use Database\DBConnection;

abstract class Controller
{

  protected $db;

  public function __construct(DBConnection $db)
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    $this->db = $db;
  }

  // Retrieves the view and integrates the layout
  protected function view(string $path, array $params = null)
  {
    ob_start();
    $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
    require VIEWS . $path . '.php';

    $content = ob_get_clean();
    require VIEWS . 'layout.php';
  }

  protected function getDB()
  {
    return $this->db;
  }

  public function isConnected()
  {
    if (isset($_SESSION['auth']) && $_SESSION['auth']) {
      return true;
    } else {
      return header('Location: login');
    }
  }
}
