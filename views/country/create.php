<h1 class="mt-3 mb-3">Ajout d'un nouveau pays</h1>
<form action="/spytricks/country/create" method="POST">
  <div class="form-group mb-3">
    <label for="nation">Pays</label>
    <input type="text" class="form-control" name="nation" id="nation" required>
  </div>
  <div class="form-group mb-3">
    <label for="nationality">Nationalité</label>
    <input type="text" class="form-control" name="nationality" id="nationality" required>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider l'ajout du pays</button>
</form>