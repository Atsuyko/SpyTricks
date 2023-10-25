<h1>Cibles</h1>
<a href="target/create" class="btn btn-outline-dark">Créer une cible</a>
<?php foreach ($params['targets'] as $target) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $target->getLastname() . ' ' . $target->getFirstname() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Nom de code : <?= $target->getCode() ?></h5>
      <p class="card-text mt-2">Date de naissance : <?= $target->getDob() ?></p>
      <p class="card-text mt-2">Nationalité : <?= $target->getCountry()[0]->nationality ?></p>
      <a href="target/edit/<?= $target->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="target/delete/<?= $target->getCode() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
    </div>
  </div>
<?php endforeach ?>