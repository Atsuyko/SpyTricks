<h1>Administrateurs</h1>
<?php foreach ($params['admins'] as $admin) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $admin->getLastname() . ' ' . $admin->getFirstname() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">ID : <?= $admin->getId() ?></h5>
      <p class="card-text mt-2"><?= $admin->getEmail() ?></p>
      <a href="#" class="btn btn-outline-dark mx-3">Modifier</a>
      <a href="#" class="btn btn-outline-danger mx-3">Supprimer</a>
    </div>
  </div>
<?php endforeach ?>