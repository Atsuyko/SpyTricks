<h1>Agents</h1>
<a href="agent/create" class="btn btn-outline-dark">Créer un agent</a>
<?php foreach ($params['agents'] as $agent) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $agent->getLastname() . ' ' . $agent->getFirstname() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">ID : <?= $agent->getId() ?></h5>
      <p class="card-text mt-2">Date de naissance : <?= $agent->getDob() ?></p>
      <p class="card-text mt-2">Nationalité : <?= $agent->getCountry()[0]->nationality ?></p>
      <p class="card-text mt-2">Spécialité :
      <ul>
        <?php foreach ($agent->getSpe() as $spe) : ?>
          <li><?= $spe->spe ?></li>
        <?php endforeach ?>
      </ul>
      </p>
      <a href="agent/edit/<?= $agent->getId() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="agent/delete/<?= $agent->getId() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
    </div>
  </div>
<?php endforeach ?>