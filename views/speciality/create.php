<h1 class="mt-3 mb-3">Ajout d'une spécialité</h1>
<form action="/spytricks/speciality/create" method="POST">
  <div class="form-group mb-3">
    <label for="spe">Spécialité</label>
    <input type="text" class="form-control" name="spe" id="spe" required>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Valider l'ajout de la spécialité</button>
</form>