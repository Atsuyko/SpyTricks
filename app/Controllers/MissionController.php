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
    $mission = new Mission($this->getDB());
    $hideout = array_pop($_POST);
    $agent = array_pop($_POST);
    $target = array_pop($_POST);
    $contact = array_pop($_POST);

    $resultMission = $mission->updateByCode($code, $_POST);
    $resultHideout = $mission->updateHideout($code, $hideout);
    $resultAgent = $mission->updateAgent($code, $agent);
    $resultTarget = $mission->updateTarget($code, $target);
    $resultContact = $mission->updateContact($code, $contact);

    if ($resultMission) {
      if ($resultHideout) {
        if ($resultAgent) {
          if ($resultTarget) {
            if ($resultContact) {
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
    $mission = new Mission($this->getDB());
    $result = $mission->deleteByCode($code);

    if ($result) {
      return header('Location: /spytricks/mission');
    }
  }
}
