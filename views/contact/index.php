<h1>Contacts</h1>
<?php foreach ($params['contacts'] as $contact) : ?>
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <h2 class="card-title"><?= $contact->getLastname() . ' ' . $contact->getFirstname() ?></h2>
      <h5 class="card-subtitle text-body-secondary mb-2">Nom de code : <?= $contact->getCode() ?></h5>
      <p class="card-text mt-2">Date de naissance : <?= $contact->getDob() ?></p>
      <p class="card-text mt-2">Nationalité : <?= $contact->getCountry()[0]->nationality ?></p>
      <a href="contact/edit/<?= $contact->getCode() ?>" class="btn btn-outline-dark mx-3">Modifier</a>
      <form action="contact/delete/<?= $contact->getCode() ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-outline-danger mx-3">Supprimer</button>
      </form>
    </div>
  </div>
<?php endforeach ?>