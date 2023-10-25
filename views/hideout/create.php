<h1 class="mt-3 mb-3">Création d'une nouvel planque</h1>
<form action="/spytricks/hideout/create" method="POST">
  <div class="form-group mb-3">
    <label for="code">Nom de code</label>
    <input type="text" class="form-control" name="code" id="code" required>
  </div>
  <div class="form-group mb-3">
    <label for="address">Adresse</label>
    <input type="text" class="form-control" name="address" id="address" required>
  </div>
  <div class="form-group mb-3">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" id="type" required>
  </div>
  <div class="form-group mb-3">
    <label for="countries">Pays</label>
    <select class="form-control" id="countries" name="id_country" required>
    <option selected value="">Choisir un pays</option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNation() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider la création de la planque</button>
</form>