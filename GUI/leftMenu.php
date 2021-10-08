<div class="full-height px-2 col-1 bg-danger">
  <h5 class="mx-auto text-center font-weight-bold">
    <?php if (isset($_SESSION['logado'])) {
      echo '
      <a href="'.$_SERVER["PHP_SELF"].'"><div class="my-4 text-dark outline">Home</div></a>
      <a href="/Ficha"><div class="my-4 text-dark outline">Ficha</div></a>
      <a href="/TK"><div class="my-4 text-dark outline">TK</div></a>
      ';
    } else {
      echo '<a href="?tela=login"><div class="my-4 text-dark outline">Login</div></a>';
    }?>
  </h5>
</div>
