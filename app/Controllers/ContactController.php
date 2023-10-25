<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Models\Country;

class ContactController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('contact.create', compact('countries'));
  }

  public function createPost()
  {
    $this->isConnected();

    $contact = new Contact($this->getDB());
    $result = $contact->create($_POST);

    if ($result) {
      return header('Location: /spytricks/contact');
    }
  }

  // READ 
  public function index()
  {
    $this->isConnected();

    $contact = new Contact($this->getDB());
    $contacts = $contact->all();

    return $this->view('contact.index', compact('contacts'));
  }

  //UPDATE
  public function edit(string $code)
  {
    $this->isConnected();

    $contact = new Contact($this->getDB());
    $contact = $contact->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();

    return $this->view('contact.edit', compact('contact', 'countries'));
  }

  public function update(string $code)
  {
    $this->isConnected();

    $contact = new Contact($this->getDB());
    $result = $contact->updateByCode($code, $_POST);

    if ($result) {
      return header('Location: /spytricks/contact');
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $this->isConnected();

    $contact = new Contact($this->getDB());
    $result = $contact->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/contact');
    }
  }
}
