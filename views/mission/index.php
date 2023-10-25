<h1>Missions</h1>
<a href="mission/create" class="btn btn-outline-dark">Créer une mission</a>
<?php foreach ($params['missions'] as $mission) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $mission->getCode() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2"><?= $mission->getTitle() ?></h5>
      <small><?= $mission->getCountry()[0]->nation ?></small><br>
      <small><?= $mission->getType() ?></small>
      <p class="card-text mt-2"><?= $mission->getDescription() ?></p>
      <a href="mission/<?= $mission->getCode() ?>" class="btn btn-outline-secondary mx-3">Consulter</a>
      <a href="mission/edit/<?= $mission->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="mission/delete/<?= $mission->getCode() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
    </div>
  </div>
<?php endforeach ?>