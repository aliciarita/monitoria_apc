

<main>

<h2 class="mt-3">Excluir Dúvida</h2>

<form method="post">

  <div class="form-group">
    <p>Você deseja realmente excluir a dúvida <strong><?=$obDuvida->assunto?></strong>?</p>
  </div>

  <div class="form-group">
    <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    <a href="acessoDuvidas.php">
      <button type="button" class="btn btn-secondary">Cancelar</button>
    </a>
  </div>

</form>

</main>