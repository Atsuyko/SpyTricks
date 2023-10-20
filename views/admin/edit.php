<h1 class="mt-3 mb-3">Modification des données de l'administrateur <?= $params['admin']->getId() ?></h1>
<form action="<?= $params['admin']->getId() ?>" method="POST">
  <div class="form-group mb-3">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $params['admin']->getLastname() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $params['admin']->getFirstname() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?= $params['admin']->getEmail() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="doc">Date de création</label>
    <input type="date" class="form-control" name="doc" id="doc" value="<?= date('Y-m-d', strtotime($params['admin']->getDoc())) ?>" disabled>
  </div>
  <?php /*
  <div class="form-group mb-3">
    <label for="id_country">Nationalité</label>
    <select class="form-select" id="id_country">
      <option selected>Choisir la nationalité de l'admin</option>
      <?php foreach ($params['countries'] as $country) : ?>
        <option value="<?= $country->getId() ?>"><?= $country->getNationality() ?></option>
      <?php endforeach ?>
    </select>
  </div>
  */ ?>
  <button type="submit" class="btn btn-outline-secondary">Valider les modifications</button>
</form>