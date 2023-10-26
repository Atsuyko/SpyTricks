<h1>Missions</h1>
<?php if (isset($_SESSION['auth']) && $_SESSION['auth']) : ?>
  <a href="/spytricks/mission/create" class="btn btn-outline-dark">Créer une mission</a>
<?php endif ?>
<?php foreach ($params['missions'] as $mission) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $mission->getCode() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2"><?= $mission->getTitle() ?></h5>
      <small><?= $mission->getCountry()[0]->nation ?></small><br>
      <small><?= $mission->getType() ?></small>
      <p class="card-text mt-2"><?= $mission->getDescription() ?></p>
      <a href="/spytricks/mission/show/<?= $mission->getCode() ?>" class="btn btn-outline-secondary mx-3">Consulter</a>
      <?php if (isset($_SESSION['auth']) && $_SESSION['auth']) : ?>
        <a href="/spytricks/mission/edit/<?= $mission->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
        <form action="/spytricks/mission/delete/<?= $mission->getCode() ?>" method="POST" class="d-inline">
          <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
        </form>
      <?php endif ?>
    </div>
  </div>
<?php endforeach ?>
<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
  $currentPage = (int) strip_tags($_GET['page']);
} else {
  $currentPage = 1;
}
?>
<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item <?= ($currentPage == 1) || (!isset($_GET['page'])) ? 'disabled' : '' ?>">
      <a href="/spytricks/mission/?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
    </li>
    <?php for ($page = 1; $page <= $params['pages']; $page++) : ?>
      <li class="page-item <?= ($currentPage == $page) ? 'active' : '' ?>">
        <a href="/spytricks/mission/?page=<?= $page ?>" class="page-link"><?= $page ?></a>
      </li>
    <?php endfor ?>
    <li class="page-item <?= ($currentPage == $params['pages']) ? 'disabled' : '' ?>">
      <a href="/spytricks/mission/?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
    </li>
  </ul>
</nav>