<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpyTricks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/spytricks">SpyTricks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/spytricks">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/spytricks/mission">Missions</a>
          </li>
          <?php if (isset($_SESSION['auth']) && $_SESSION['auth']) : ?>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/agent">Agents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/hideout">Planques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/contact">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/target">Cibles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/speciality">Spécialités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/country">Pays</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/admin">Admins</a>
            </li>
          <?php endif ?>
        </ul>
        <ul class="navbar-nav ms-auto">
          <?php if (!isset($_SESSION['auth'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="/spytricks/login">Connexion</a>
            </li>
          <?php else : ?>


            <li class="nav-item">
              <a class="nav-link" href="/spytricks/logout">Déconnexion</a>
            </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <?= $content ?>
  </div>
  <footer>
    <div class="container d-flex justify-content-center mt-5">
      <p>Developped By Atsuyko.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="<?= SCRIPT . 'assets' . DIRECTORY_SEPARATOR . 'script_mission.js' ?>"></script>
</body>

</html>