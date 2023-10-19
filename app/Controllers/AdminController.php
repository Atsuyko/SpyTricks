<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{

  // READ 
  public function index()
  {
    $admin = new Admin($this->getDB());
    $admins = $admin->all();

    return $this->view('admin.index', compact('admins'));
  }
}
