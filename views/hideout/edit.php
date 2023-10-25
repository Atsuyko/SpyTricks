<h1 class="mt-3 mb-3">Modification des données de la planque <?= $params['hideout']->getCode() ?></h1>
<form action="<?= $params['hideout']->getCode() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="address">Adresse</label>
    <input type="text" class="form-control" name="address" id="address" value="<?= $params['hideout']->getAddress() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" id="type" value="<?= $params['hideout']->getType() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="countries">Pays</label>
    <select class="form-control" id="countries" name="id_country" required>
      <option selected value="<?= $params['hideout']->getIdCountry() ?>"><?= $params['hideout']->getCountry()[0]->nation ?></option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNation() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>