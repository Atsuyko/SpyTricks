<?php

namespace App\Controllers;

use App\Models\Admin;

class LoginController extends Controller
{
  public function loginGet()
  {
    return $this->view('login');
  }

  public function loginPost()
  {
    $admin = new Admin($this->getDB());
    $admin = $admin->getAdmin($_POST['email']);

    if (password_verify($_POST['password'], $admin->getPassword())) {
      $_SESSION['auth'] = true;

      return header('Location: /spytricks/mission');
    } else {
      return header('Location: /spytricks/login');
    }
  }

  public function logout()
  {
    session_destroy();

    return header('Location: /spytricks/');
  }
}
