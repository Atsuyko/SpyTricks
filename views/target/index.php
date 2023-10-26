<h1>Cibles</h1>
<a href="/spytricks/target/create" class="btn btn-outline-dark">Créer une cible</a>
<?php foreach ($params['targets'] as $target) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $target->getLastname() . ' ' . $target->getFirstname() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Nom de code : <?= $target->getCode() ?></h5>
      <p class="card-text mt-2">Date de naissance : <?= $target->getDob() ?></p>
      <p class="card-text mt-2">Nationalité : <?= $target->getCountry()[0]->nationality ?></p>
      <a href="/spytricks/target/edit/<?= $target->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="/spytricks/target/delete/<?= $target->getCode() ?>" method="POST" class="d-inline">
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
      <a href="/spytricks/target/?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
    </li>
    <?php for ($page = 1; $page <= $params['pages']; $page++) : ?>
      <li class="page-item <?= ($currentPage == $page) ? 'active' : '' ?>">
        <a href="/spytricks/target/?page=<?= $page ?>" class="page-link"><?= $page ?></a>
      </li>
    <?php endfor ?>
    <li class="page-item <?= ($currentPage == $params['pages']) ? 'disabled' : '' ?>">
      <a href="/spytricks/target/?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
    </li>
  </ul>
</nav>