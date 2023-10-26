<h1 class="mt-3 mb-3">Création d'un administrateur</h1>
<form action="/spytricks/admin/create" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" required>
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" required>
  </div>
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" required>
  </div>
  <div class="form-group mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" required>
  </div>
  <div class="form-group mb-3">
    <label for="doc">Date de création</label>
    <input type="date" class="form-control" name="doc" id="doc" value="<?= date('Y-m-d') ?>" disabled>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider la création de l'administrateur</button>
</form>