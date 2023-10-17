<h1>Missions</h1>
<?php foreach ($params['missions'] as $mission) : ?>
  <div class="card mt-3">
    <div class="card-body">
      <h2 class="card-title"><?= $mission->getCode() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2"><?= $mission->title ?></h5>
      <small><?= $mission->id_country ?></small><br>
      <small><?= $mission->type ?></small>
      <p class="card-text mt-2"><?= $mission->description ?></p>
      <a href="mission/<?= $mission->getCode() ?>" class="btn btn-outline-secondary mx-3">Consulter</a>
      <a href="#" class="btn btn-outline-dark mx-3">Modifier</a>
      <a href="#" class="btn btn-outline-danger mx-3">Supprimer</a>
    </div>
  </div>
<?php endforeach ?>
</tbody>