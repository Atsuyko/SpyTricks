<h1 class="mt-3 mb-3">Création d'une mission</h1>
<form action="/spytricks/mission/create" method="POST">
<div class="form-group mb-3">
    <label for="code"><b>Nom de code</b></label>
    <input type="text" class="form-control" name="code" id="code" required>
  </div>
  <div class="form-group mb-3">
    <label for="title"><b>Titre</b></label>
    <input type="text" class="form-control" name="title" id="title" required>
  </div>
  <div class="form-group mb-3">
    <label for="type"><b>Type</b></label>
    <input type="text" class="form-control" name="type" id="type" required>
  </div>
  <div class="form-group mb-3">
    <label for="description"><b>Description</b></label>
    <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="countries"><b>Pays</b></label>
    <select class="form-control" id="countries" name="id_country" onchange="selected_country(this.value);" required>
    <option selected value="">Choisir un pays</option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>" ><?= $country->getNation() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="specialities"><b>Spécialité</b></label>
    <select class="form-control" id="specialities" name="id_spe" required>
    <option selected value="">Choisir une spécialité</option>
      <?php foreach ($params['specialities'] as $speciality) : ?>
        <option value="<?= $speciality->getId() ?>"><?= $speciality->getSpe() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="status"><b>Statut</b></label>
    <select class="form-control" id="status" name="status" required>
        <option value="En préparation">En préparation</option>
        <option value="En cours">En cours</option>
        <option value="Terminé">Terminé</option>
        <option value="Echec">Echec</option>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="start"><b>Date de début</b></label>
    <input type="date" class="form-control" name="start" id="start" required>
  </div>
  <div class="form-group mb-3">
    <label for="end">Date de fin</label>
    <input type="date" class="form-control" name="end" id="end" required>
  </div>
  <div class="row">
  <div class="col-6">
      <p><b>Contact</b></p>
      <?php foreach ($params['contacts'] as $contact) : ?>
        <div class="form-check form-switch">
          <input class="form-check-input contacts" 
          type="checkbox" 
          value="<?= $contact->getCode() ?>"
          id="<?= $contact->getIdCountry() ?>" 
          name="contacts[<?= $contact->getCode() ?>]">
          <label class="form-check-label" for="<?= $contact->getIdCountry() ?>"><?= $contact->getCode() ?></label>
        </div>
      <?php endforeach ?>
    </div>
    <div class="col-6">
      <p><b>Cibles</b></p>
      <?php foreach ($params['targets'] as $target) : ?>
        <div class="form-check form-switch">
          <input class="form-check-input targets" 
          type="checkbox" 
          value="<?= $target->getCode() ?>"
          id="<?= $target->getIdCountry() ?>" 
          name="targets[<?= $target->getCode() ?>]" 
          onchange="selected_target(this.id)">
          <label class="form-check-label" for="<?= $target->getCode() ?>"><?= $target->getCode() ?></label>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-6">
      <p><b>Agents</b></p>
      <?php foreach ($params['agents'] as $agent) : ?>
        <div class="form-check form-switch">
          <input class="form-check-input agents" 
          type="checkbox" 
          value="<?= $agent->getId() ?>"
          id="<?= $agent->getIdCountry() ?>" 
          name="agents[<?= $agent->getId() ?>]">
          <label class="form-check-label" for="<?= $agent->getIdCountry() ?>"><?= $agent->getLastname() ?> <?= $agent->getFirstname() ?></label>
        </div>
      <?php endforeach ?>
    </div>
    <div class="col-6">
      <p><b>Planques</b></p>
      <?php foreach ($params['hideouts'] as $hideout) : ?>
        <div class="form-check form-switch">
          <input class="form-check-input hideouts" 
          type="checkbox" 
          value="<?= $hideout->getCode() ?>"
          id="<?= $hideout->getIdCountry() ?>" 
          name="hideouts[<?= $hideout->getCode() ?>]">
          <label class="form-check-label" for="<?= $hideout->getIdCountry() ?>"><?= $hideout->getCode() ?></label>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-secondary mt-3">Valider la création de la mission</button>
</form>