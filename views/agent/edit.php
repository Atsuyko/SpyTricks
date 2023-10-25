<h1 class="mt-3 mb-3">Modification des données de l'agent <?= $params['agent']->getId() ?></h1>
<form action="<?= $params['agent']->getId() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $params['agent']->getLastname() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $params['agent']->getFirstname() ?>" required>
  </div>

  <div class="form-group mb-3">
    <label for="dob">Date de naissance</label>
    <input type="date" class="form-control" name="dob" id="dob" value="<?= date('Y-m-d', strtotime($params['agent']->getDob())) ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="countries">Nationalité</label>
    <select class="form-control" id="countries" name="id_country" required>
      <option selected value="<?= $params['agent']->getIdCountry() ?>"><?= $params['agent']->getCountry()[0]->nationality ?></option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNationality() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <p>Spécialités</p>
  <?php foreach ($params['specialities'] as $speciality) : ?>
    <div class="form-check form-switch">
      <input class="form-check-input" 
      type="checkbox" 
      value="<?= $speciality->getId() ?>"
      id="<?= $speciality->getId() ?>" 
      name="specialities[<?= $speciality->getId() ?>]" 
      <?php foreach ($params['agent']->getSpe() as $spe) {
        echo ($speciality->getId() === $spe->getId()) ? 'checked' : '';
      }?>>
      <label class="form-check-label" for="<?= $speciality->getId() ?>"><?= $speciality->getSpe() ?></label>
    </div>
  <?php endforeach ?>

  <button type="submit" class="btn btn-outline-secondary mt-3">Valider les modifications</button>
</form>