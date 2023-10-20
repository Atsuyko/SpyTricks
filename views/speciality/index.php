<h1>Specialités</h1>
<?php foreach ($params['specialities'] as $speciality) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $speciality->getSpe() ?></h2>
      <p class="card-text mt-2">ID : <?= $speciality->getId() ?></p>
      <a href="speciality/edit/<?= $speciality->getId() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="speciality/delete/<?= $speciality->getId() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
    </div>
  </div>
<?php endforeach ?>