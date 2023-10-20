<h1 class="mt-3 mb-3">Modification des données du contact <?= $params['contact']->getCode() ?></h1>
<form action="<?= $params['contact']->getCode() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $params['contact']->getLastname() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $params['contact']->getFirstname() ?>">
  </div>

  <div class="form-group mb-3">
    <label for="dob">Date de naissance</label>
    <input type="date" class="form-control" name="dob" id="dob" value="<?= date('Y-m-d', strtotime($params['contact']->getDob())) ?>">
  </div>
  <div class="form-group mb-3">
    <label for="countries">Nationalité</label>
    <select class="form-control" id="countries" name="id_country">
      <option selected value="<?= $params['contact']->getIdCountry() ?>"><?= $params['contact']->getCountry()[0]->nationality ?></option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNationality() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>