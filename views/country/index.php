<h1>Pays</h1>
<?php foreach ($params['countries'] as $country) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $country->nation ?></h2>
      <p class="card-text mt-2">Nationalité : <?= $country->nationality ?></p>
      <p class="card-text mt-2">ID : <?= $country->id ?></p>
      <a href="#" class="btn btn-outline-dark mx-3">Modifier</a>
      <a href="#" class="btn btn-outline-danger mx-3">Supprimer</a>
    </div>
  </div>
<?php endforeach ?>