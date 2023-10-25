<h1 class="mt-3 mb-3">Modification des données du pays <?= $params['country']->getId() ?></h1>
<form action="<?= $params['country']->getId() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="nation">Pays</label>
    <input type="text" class="form-control" name="nation" id="nation" value="<?= $params['country']->getNation() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="nationality">Nationalité</label>
    <input type="text" class="form-control" name="nationality" id="nationality" value="<?= $params['country']->getNationality() ?>" required>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>