<h1>Planques</h1>
<a href="/spytricks/hideout/create" class="btn btn-outline-dark">Créer une planque</a>
<?php foreach ($params['hideouts'] as $hideout) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $hideout->getCode() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Pays : <?= $hideout->getCountry()[0]->nation ?></h5>
      <p class="card-text mt-2">Type de planque : <?= $hideout->getType() ?></p>
      <p class="card-text mt-2">Adresse : <?= $hideout->getAddress() ?></p>
      <a href="/spytricks/hideout/edit/<?= $hideout->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="/spytricks/hideout/delete/<?= $hideout->getCode() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
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
      <a href="/spytricks/hideout/?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
    </li>
    <?php for ($page = 1; $page <= $params['pages']; $page++) : ?>
      <li class="page-item <?= ($currentPage == $page) ? 'active' : '' ?>">
        <a href="/spytricks/hideout/?page=<?= $page ?>" class="page-link"><?= $page ?></a>
      </li>
    <?php endfor ?>
    <li class="page-item <?= ($currentPage == $params['pages']) ? 'disabled' : '' ?>">
      <a href="/spytricks/hideout/?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
    </li>
  </ul>
</nav>