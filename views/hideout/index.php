<h1>Planques</h1>
<?php foreach ($params['hideouts'] as $hideout) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $hideout->getCode() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Pays : <?= $hideout->getIdCountry()[0]->nation ?></h5>
      <p class="card-text mt-2">Type de planque : <?= $hideout->getType() ?></p>
      <p class="card-text mt-2">Adresse : <?= $hideout->getAddress() ?></p>
      <a href="#" class="btn btn-outline-dark mx-3">Modifier</a>
      <a href="#" class="btn btn-outline-danger mx-3">Supprimer</a>
    </div>
  </div>
<?php endforeach ?>