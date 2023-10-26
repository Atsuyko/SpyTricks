<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    return $this->view('admin.create');
  }

  public function createPost()
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['doc'] = date('Y-m-d');
    $result = $admin->create($_POST);

    if ($result) {
      return header('Location: /spytricks/admin');
    }
  }

  // READ 
  public function index()
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $admins = $admin->pagination();

    $total = count($admin->all());
    $pages = ceil($total / 3);

    return $this->view('admin.index', compact('admins', 'total', 'pages'));
  }

  //UPDATE
  public function edit(int $id)
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $admin = $admin->findById($id);

    return $this->view('admin.edit', compact('admin'));
  }

  public function update(int $id)
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $result = $admin->updateById($id, $_POST);

    if ($result) {
      return header('Location: /spytricks/admin');
    }
  }

  // DELETE
  public function delete(int $id)
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $result = $admin->deleteById($id);

    if ($result) {
      return header('Location: /spytricks/admin');
    }
  }
}
