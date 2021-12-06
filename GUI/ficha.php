<div id="quadro" class="border border-danger my-5 mx-auto rounded w-50 text-center">
  <h1>Identificação, por favor:</h1>
  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="login_usuario" class="">Nome de usuário:</label>
    <input class="text-light form-control w-50 mx-auto bg-secondary" type="text" name="login_usuario" id="login_usuario" value="" required>
    <label for="senha_usuario" class="">Senha:</label>
    <input class="text-dark form-control w-50 mx-auto bg-secondary" type="password" name="senha_usuario" id="senha_usuario" value="" required>
    <button class="form-control w-25 mx-auto bg-dark text-light my-3" type="submit" name="button">Entrar</button>
  </form>
</div>
