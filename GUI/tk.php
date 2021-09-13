<div style="background-image: url('img/wpp.jpg');background-size: cover; height:100%" class="col text-center content-center">
  <div class="row">
    <div class="col">
      <h1 class="m-4">Jaeyun</h1>
      <img src="img\jaeyun.png" width="50%" height="inherit">
      <h1 class="m-4">Matou o karu <i id="tk_leo">PlaceHolder</i> vezes</h1>
      <h6>Incrementar</h6>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?vacilo=leo">
        <button class="btn btn-danger" id="leo" href="?vacilo=leo"><i class="fas fa-arrow-circle-up"></i> </button>
      </a>
    </div>
    <div class="col">
      <h1 class="m-4">Lin Fei</h1>
      <img src="img\lin fei.png" width="50%" height="inherit" style="transform: scaleX(-1)">
      <h1 class="m-4">Matou o leo <i id="tk_karu">PlaceHolder</i> vezes</h1>
      <h6>Incrementar</h6>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?vacilo=karu">
        <button class="btn btn-danger" id="karu" ><i class="fas fa-arrow-circle-up"></i> </button>
      </a>
    </div>
  </div>
  <p style="color:#0002">Números expostos tendem a mudar <!--e é sempre pra mais, KAKA --></p>
</div>
<script type="text/javascript">
document.getElementById("tk_karu").innerHTML = document.getElementById("karu_tk").innerHTML;
document.getElementById("tk_leo").innerHTML = document.getElementById("leo_tk").innerHTML;
</script>
