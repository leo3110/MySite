<div class="full-height px-2 col-1 bg-danger">
  <h5 class="mx-auto text-center font-weight-bold">
    <?php if (isset($_SESSION['logado'])) {
      echo '<a href="?op=logout"><div class="py-3 text-dark">Logout</div></a>
      <a href="?tela=home"><div class="py-3 text-dark">Home</div></a>
      <a href="?tela=Ficha"><div class="py-3 text-dark">Ficha</div></a>
      <a href="?tela=TK"><div class="py-3 text-dark">TK</div></a>
      ';
    } else {
      echo '<a href="/Login"><div class="my-4 text-dark outline">Login</div></a>';
    }?>
  </h5>
</div>
