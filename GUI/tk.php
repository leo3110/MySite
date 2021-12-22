<script type="text/javascript">
$(function(){
  <?php TKBusca(); ?>
  $("button").click(function(){
    var btn = $(this).attr("alvo");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(btn).innerHTML = this.responseText;
      }
    };
    var a = $(this).attr("alvo");
    var b = $(this).attr("objetivo");
    xmlhttp.open("get","script/ajax.php?a="+a+"&&b="+b, true);
    xmlhttp.send();
  })
});

</script>
<div class="TK">
	<div class="Player">
		<h1 class="Titulo">Leo</h1>
		<div class="IMG">
			<img src="img\jaeyun.png">
		</div>
		<div class="IMGBaixo">
			<h1 class="">Matou o karu <span id="leo_tk">0</span> vezes</h1>
			<button class="Button Up" id="Manda" alvo='leo_tk' objetivo="Incrementa">
				<i class="fas fa-arrow-circle-up"></i>
			</button>
      <button class="Button Down" id="Manda" alvo='leo_tk' objetivo="Decrementa">
				<i class="fas fa-arrow-circle-down"></i>
			</button>
    </div>
	</div>
	<div class="Player">
		<h1 class="Titulo">Karu</h1>
		<div class="IMG">
			<img src="img\lin fei.png" style="transform: scaleX(-1);">
		</div>
		<div class="IMGBaixo">
			<h1 class="">Matou o leo <span id="karu_tk">0</span> vezes</h1>
				<button class="Button Up" id="Manda" alvo='karu_tk' objetivo="Incrementa">
					<i class="fas fa-arrow-circle-up"></i>
				</button>
				<button class="Button Down" id="Manda" alvo='karu_tk' objetivo="Decrementa">
					<i class="fas fa-arrow-circle-down"></i>
				</button>
		</div>
	</div>
</div>
