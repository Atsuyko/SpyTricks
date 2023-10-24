<h1 class="mt-3 mb-3">Modification des données de la mission <?= $params['mission']->getCode() ?></h1>
<form action="<?= $params['mission']->getCode() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="title"><b>Titre</b></label>
    <input type="text" class="form-control" name="title" id="title" value="<?= $params['mission']->getTitle() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="type"><b>Type</b></label>
    <input type="text" class="form-control" name="type" id="type" value="<?= $params['mission']->getType() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="description"><b>Description</b></label>
    <textarea class="form-control" name="description" id="description" rows="5"><?= $params['mission']->getDescription() ?></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="countries"><b>Pays</b></label>
    <select class="form-control" id="countries" name="id_country" onchange="selected_country(this.value);">
      <option selected value="<?= $params['mission']->getIdCountry() ?>"><?= $params['mission']->getCountry()[0]->nation ?></option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>" ><?= $country->getNation() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="specialities"><b>Spécialité</b></label>
    <select class="form-control" id="specialities" name="id_spe">
      <option selected value="<?= $params['mission']->getIdSpe() ?>"><?= $params['mission']->getSpe()[0]->spe ?></option>
      <?php foreach ($params['specialities'] as $speciality) : ?>
        <option value="<?= $speciality->getId() ?>"><?= $speciality->getSpe() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="status"><b>Statut</b></label>
    <select class="form-control" id="status" name="status">
      <option selected value="<?= $params['mission']->getStatus() ?>"><?= $params['mission']->getStatus() ?></option>
        <option value="En préparation">En préparation</option>
        <option value="En cours">En cours</option>
        <option value="Terminé">Terminé</option>
        <option value="Echec">Echec</option>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="start"><b>Date de début</b></label>
    <input type="date" class="form-control" name="start" id="start" value="<?= $params['mission']->getStart() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="end">Date de fin</label>
    <input type="date" class="form-control" name="end" id="end" value="<?= $params['mission']->getEnd() ?>">
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
          name="contacts[<?= $contact->getCode() ?>]" 
          <?php foreach ($params['mission']->getContact() as $ctt) {
            echo ($contact->getCode() === $ctt->getCode()) ? 'checked' : '';
          }?> 
          <?php echo ($contact->getIdCountry() === $params['mission']->getIdCountry()) ? '' : 'disabled';
          ?>>
          <label class="form-check-label" for="<?= $contact->getIdCountry() ?>"><?= $contact->getCode() ?></label>
        </div>
      <?php endforeach ?>
    </div>
    <div class="col-6">
      <p><b>Cibles</b></p>
      <?php foreach ($params['targets'] as $target) : ?>
        <div class="form-check form-switch">
          <input class="form-check-input" 
          type="checkbox" 
          value="<?= $target->getCode() ?>"
          id="<?= $target->getCode() ?>" 
          name="targets[<?= $target->getCode() ?>]" 
          <?php foreach ($params['mission']->getTarget() as $tgt) {
            echo ($target->getCode() === $tgt->getCode()) ? 'checked' : '';
          }?>>
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
          <input class="form-check-input" 
          type="checkbox" 
          value="<?= $agent->getId() ?>"
          id="<?= $agent->getId() ?>" 
          name="agents[<?= $agent->getId() ?>]" 
          <?php foreach ($params['mission']->getAgent() as $agt) {
            echo ($agent->getId() === $agt->id) ? 'checked' : '';
          }?>>
          <label class="form-check-label" for="<?= $agent->getId() ?>"><?= $agent->getLastname() ?> <?= $agent->getFirstname() ?></label>
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
          name="hideouts[<?= $hideout->getCode() ?>]" 
          <?php foreach ($params['mission']->getHideout() as $hdt) {
            echo ($hideout->getCode() === $hdt->getCode()) ? 'checked' : '';
          }?>
          <?php echo ($hideout->getIdCountry() === $params['mission']->getIdCountry()) ? '' : 'disabled';
          ?>>
          <label class="form-check-label" for="<?= $hideout->getIdCountry() ?>"><?= $hideout->getCode() ?></label>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-secondary mt-3">Valider les modifications</button>
</form>