<div id="LeftMenu" class="LeftMenu">
  <h1 class="">
    <?php if (isset($_SESSION['logado'])) {
      echo '<a href="?op=clean"><div class="">Logout</div></a>
      <a href="?tela=home"><div class="">Home</div></a>
      <a href="?tela=ficha"><div class="">Ficha</div></a>
      <a href="?tela=tk"><div class="">TK</div></a>
      ';
    } else {
      echo '<a href="/Login"><div class="">Login</div></a>';
    }?>
  </h5>
</div>
<div class="Page col">
