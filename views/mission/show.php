<h1>Mission <?= $params['mission']->getCode() ?></h1>
<div class="card mt-3">
  <div class="card-body">
    <h2 class="card-title mb-3"><?= $params['mission']->title ?></h2>

    <h4><?= $params['mission']->id_country ?></h4>
    <h4><?= $params['mission']->type ?></h4>

    <h5 class="mt-3">Briefing :</h5>
    <p class="card-text mt-2"><?= $params['mission']->description ?></p>

    <p class="card-text mt-2">
    <h6>Contact : </h6>
    <?= $params['mission']->status ?>
    </p>

    <p class="card-text mt-2">
    <h6>Cibles : </h6>
    <?= $params['mission']->status ?>
    </p>

    <p class="card-text mt-2">
    <h6>Agents : </h6>
    <ul>
      <?php foreach ($params['mission']->getAgent() as $agent) : ?>
        <li><?= $agent->lastname ?></li>
      <?php endforeach ?>
    </ul>
    </p>

    <p class="card-text mt-2">
    <h6>Statut : </h6>
    <?= $params['mission']->status ?>
    </p>

    <p class="card-text mt-2">
    <h6>Début de mission : </h6>
    <?= $params['mission']->getStart() ?>
    </p>

    <p class="card-text mt-2">
    <h6>Fin de mission : </h6>
    <?= $params['mission']->getEnd() ?>
    </p>

    <a href="../mission" class="btn btn-outline-dark">Retour à la liste des missions</a>
  </div>
</div>