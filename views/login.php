<h1>Connexion</h1>
<div class="container d-flex align-item-center justify-content-center form-signin w-100 m-auto mt-4">
  <form action="/spytricks/login" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-secondary" name="submit">Connexion</button>
  </form>
</div>