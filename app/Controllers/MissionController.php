<?php

namespace App\Controllers;

use App\Models\Agent;
use App\Models\Target;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Hideout;
use App\Models\Mission;
use App\Models\Speciality;

class MissionController extends Controller
{
  //CREATE
  public function createGet()
  {
    $this->isConnected();

    $country = new Country($this->getDB());
    $countries = $country->all();
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();
    $agent = new Agent($this->getDB());
    $agents = $agent->all();
    $target = new Target($this->getDB());
    $targets = $target->all();
    $contact = new Contact($this->getDB());
    $contacts = $contact->all();
    $hideout = new Hideout($this->getDB());
    $hideouts = $hideout->all();

    return $this->view('mission.create', compact('countries', 'specialities', 'agents', 'targets', 'contacts', 'hideouts'));
  }

  public function createPost()
  {
    $this->isConnected();

    $mission = new Mission($this->getDB());

    if (isset($_POST['hideouts'])) {
      $hideout = array_pop($_POST);
    }

    if (isset($_POST['agents'])) {
      $agent = array_pop($_POST);
    } else {
      throw new \Exception("Vous devez sélectionner au moins 1 agent !");
    }

    if (isset($_POST['targets'])) {
      $target = array_pop($_POST);
    }

    if (isset($_POST['contacts'])) {
      $contact = array_pop($_POST);
    }

    $resultMission = $mission->create($_POST);

    if (isset($hideout)) {
      $resultHideout = $mission->createHideout($_POST['code'], $hideout);
    }

    if (isset($agent)) {
      $resultAgent = $mission->createAgent($_POST['code'], $agent);
    }

    if (isset($target)) {
      $resultTarget = $mission->createTarget($_POST['code'], $target);
    }

    if (isset($contact)) {
      $resultContact = $mission->createContact($_POST['code'], $contact);
    }

    if ($resultMission) {
      if ((isset($resultHideout) && $resultHideout) || !isset($resultHideout)) {
        if ((isset($resultAgent) && $resultAgent) || !isset($resultAgent)) {
          if ((isset($resultTarget) && $resultTarget) || !isset($resultTarget)) {
            if ((isset($resultContact) && $resultContact) || !isset($resultContact)) {
              return header('Location: /spytricks/mission');
            }
          }
        }
      }
    }
  }

  // READ 
  public function index()
  {
    $mission = new Mission($this->getDB());
    $missions = $mission->all();

    return $this->view('mission.index', compact('missions'));
  }

  // READ - Retrieve a Mission instance
  public function show(string $code)
  {
    $mission = new Mission($this->getDB());
    $mission = $mission->findByCode($code);

    return $this->view('mission.show', compact('mission'));
  }
  //UPDATE
  public function edit(string $code)
  {
    $this->isConnected();

    $mission = new Mission($this->getDB());
    $mission = $mission->findByCode($code);
    $country = new Country($this->getDB());
    $countries = $country->all();
    $speciality = new Speciality($this->getDB());
    $specialities = $speciality->all();
    $agent = new Agent($this->getDB());
    $agents = $agent->all();
    $target = new Target($this->getDB());
    $targets = $target->all();
    $contact = new Contact($this->getDB());
    $contacts = $contact->all();
    $hideout = new Hideout($this->getDB());
    $hideouts = $hideout->all();

    return $this->view('mission.edit', compact('mission', 'countries', 'specialities', 'agents', 'targets', 'contacts', 'hideouts'));
  }

  public function update(string $code)
  {
    $this->isConnected();

    $mission = new Mission($this->getDB());

    if (isset($_POST['hideouts'])) {
      $hideout = array_pop($_POST);
    }

    if (isset($_POST['agents'])) {
      $agent = array_pop($_POST);
    } else {
      throw new \Exception("Vous devez sélectionner au moins 1 agent !");
    }

    if (isset($_POST['targets'])) {
      $target = array_pop($_POST);
    }

    if (isset($_POST['contacts'])) {
      $contact = array_pop($_POST);
    }

    $resultMission = $mission->updateByCode($code, $_POST);

    if (isset($hideout)) {
      $resultHideout = $mission->updateHideout($code, $hideout);
    } else {
      $mission->deleteHideout($code);
    }

    if (isset($agent)) {
      $resultAgent = $mission->updateAgent($code, $agent);
    } else {
      $mission->deleteAgent($code);
    }

    if (isset($target)) {
      $resultTarget = $mission->updateTarget($code, $target);
    } else {
      $mission->deleteTarget($code);
    }

    if (isset($contact)) {
      $resultContact = $mission->updateContact($code, $contact);
    } else {
      $mission->deleteContact($code);
    }

    if ($resultMission) {
      if ((isset($resultHideout) && $resultHideout) || !isset($resultHideout)) {
        if ((isset($resultAgent) && $resultAgent) || !isset($resultAgent)) {
          if ((isset($resultTarget) && $resultTarget) || !isset($resultTarget)) {
            if ((isset($resultContact) && $resultContact) || !isset($resultContact)) {
              return header('Location: /spytricks/mission');
            }
          }
        }
      }
    }
  }

  // DELETE
  public function delete(string $code)
  {
    $this->isConnected();

    $mission = new Mission($this->getDB());
    $mission->deleteHideout($code);
    $mission->deleteAgent($code);
    $mission->deleteTarget($code);
    $mission->deleteContact($code);
    $result = $mission->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/mission');
    }
  }
}
