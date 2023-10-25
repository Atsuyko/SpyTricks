<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();
  }

  public function createPost()
  {
    $this->isConnected();
  }

  // READ 
  public function index()
  {
    $this->isConnected();

    $admin = new Admin($this->getDB());
    $admins = $admin->all();

    return $this->view('admin.index', compact('admins'));
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
