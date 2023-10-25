<h1 class="mt-3 mb-3">Création d'une cible</h1>
<form action="/spytricks/target/create" method="POST">
  <div class="form-group mb-3">
    <label for="code">Nom de code</label>
    <input type="text" class="form-control" name="code" id="code" required>
  </div>
  <div>
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
  <button type="submit" class="btn btn-outline-secondary">Valider la création de la cible</button>
</form>