<h1 class="mt-3 mb-3">Modification des données de l'administrateur <?= $params['admin']->getId() ?></h1>
<form action="<?= $params['admin']->getId() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $params['admin']->getLastname() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $params['admin']->getFirstname() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?= $params['admin']->getEmail() ?>" required>
  </div>
  <div class="form-group mb-3">
    <label for="doc">Date de création</label>
    <input type="text" class="form-control" name="doc" id="doc" value="<?= $params['admin']->getDoc() ?>" disabled>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>