<h1>Mission <?= $params['mission']->getCode() ?></h1>
<div class="card mt-3 mb-3">
  <div class="card-body">
    <h2 class="card-title mb-3 d-flex justify-content-center"><?= $params['mission']->getTitle() ?></h2>

    <h4 class="d-flex justify-content-center"><?= $params['mission']->getCountry()[0]->nation ?></h4>
    <h4 class="d-flex justify-content-center"><?= $params['mission']->getType() ?></h4>

    <h5 class="mt-3 d-flex justify-content-center">Briefing de mission :</h5>
    <p class="card-text mt-2"><?= $params['mission']->getDescription() ?></p>

    <p class="card-text mt-2">
    <h6>Contact : </h6>
    <ul>
      <?php foreach ($params['mission']->getContact() as $contact) : ?>
        <li><?= $contact->getCode() ?></li>
      <?php endforeach ?>
    </ul>
    </p>

    <p class="card-text mt-2">
    <h6>Cibles : </h6>
    <ul>
      <?php foreach ($params['mission']->getTarget() as $target) : ?>
        <li><?= $target->getCode() ?></li>
      <?php endforeach ?>
    </ul>
    </p>

    <p class="card-text mt-2">
    <h6>Planques : </h6>
    <ul>
      <?php foreach ($params['mission']->getHideout() as $hideout) : ?>
        <li><?= $hideout->getCode() ?></li>
      <?php endforeach ?>
    </ul>
    </p>

    <p class="card-text mt-2">
    <h6>Agents : </h6>
    <ul>
      <?php foreach ($params['mission']->getAgent() as $agent) : ?>
        <li><?= $agent->lastname ?> <?= $agent->firstname ?></li>
      <?php endforeach ?>
    </ul>
    </p>

    <p class="card-text mt-2">
    <h6>Statut : </h6>
    <?= $params['mission']->getStatus() ?>
    </p>

    <p class="card-text mt-2">
    <h6>Début de mission : </h6>
    <?= $params['mission']->getStartFormat() ?>
    </p>

    <p class="card-text mt-2">
    <h6>Fin de mission : </h6>
    <?= $params['mission']->getEndFormat() ?>
    </p>

    <a href="../" class="btn btn-outline-dark d-flex justify-content-center">Retour à la liste des missions</a>
  </div>
</div>