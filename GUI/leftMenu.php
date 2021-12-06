<div id="LeftMenu" class="LeftMenu">
  <h5 class="">
    <?php if (isset($_SESSION['logado'])) {
      echo '<a href="?op=logout"><div class="">Logout</div></a>
      <a href="?tela=home"><div class="">Home</div></a>
      <a href="?tela=Ficha"><div class="">Ficha</div></a>
      <a href="?tela=TK"><div class="">TK</div></a>
      ';
    } else {
      echo '<a href="/Login"><div class="">Login</div></a>';
    }?>
  </h5>
</div>
