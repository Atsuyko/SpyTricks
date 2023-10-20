<h1 class="mt-3 mb-3">Modification des données de la spécialité <?= $params['speciality']->getId() ?></h1>
<form action="<?= $params['speciality']->getId() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="spe">Spécialité</label>
    <input type="text" class="form-control" name="spe" id="spe" value="<?= $params['speciality']->getSpe() ?>">
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>