<h1 class="mt-3 mb-3">Création d'un nouvel agent</h1>
<form action="/spytricks/agent/create" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" required>
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" required>
  </div>

  <div class="form-group mb-3">
    <label for="dob">Date de naissance</label>
    <input type="date" class="form-control" name="dob" id="dob" required>
  </div>
  <div class="form-group mb-3">
    <label for="countries">Nationalité</label>
    <select class="form-control" id="countries" name="id_country" required>
    <option selected value="">Choisir une nationalité</option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNationality() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <p>Spécialités</p>
  <?php foreach ($params['specialities'] as $speciality) : ?>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" value="<?= $speciality->getId() ?>" id="<?= $speciality->getId() ?>" name="specialities[<?= $speciality->getId() ?>]">
      <label class="form-check-label" for="<?= $speciality->getId() ?>"><?= $speciality->getSpe() ?></label>
    </div>
  <?php endforeach ?>

  <button type="submit" class="btn btn-outline-secondary mt-3">Valider la création de l'agent</button>
</form>