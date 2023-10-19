<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{

  // READ 
  public function index()
  {
    $contact = new Contact($this->getDB());
    $contacts = $contact->all();

    return $this->view('contact.index', compact('contacts'));
  }
}
