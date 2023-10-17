<h1>Cibles</h1>
<?php foreach ($params['targets'] as $target) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $target->lastname . ' ' . $target->firstname ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Nom de code : <?= $target->code ?></h5>
      <p class="card-text mt-2">Date de naissance : <?= $target->getDob() ?></p>
      <p class="card-text mt-2">Nationalité : <?= $target->getCountry()[0]->nationality ?></p>
      <a href="#" class="btn btn-outline-dark mx-3">Modifier</a>
      <a href="#" class="btn btn-outline-danger mx-3">Supprimer</a>
    </div>
  </div>
<?php endforeach ?>