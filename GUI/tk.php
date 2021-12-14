<script type="text/javascript">
	$(document).ready(function(){
		<?php TKBusca(); ?>
	});
</script>
<div class="TK">
	<div class="Player">
		<h1 class="Titulo">Leo</h1>
		<div class="IMG">
			<img src="img\jaeyun.png">
		</div>
		<div class="IMGBaixo">
			<h1 class="">Matou o karu <span id="leo_tk">PLACEHOLDER</span> vezes</h1>
			<a href="?tela=tk&&vacilo=leo_tk">
				<button class="Button Up" id="leo" data-tool-tip="Incrementar">
					<i class="fas fa-arrow-circle-up"></i>
				</button>
			</a>
			<a href="?tela=tk&&equivoco=leo_tk" >
				<button class="Button Down" id="leo" data-tool-tip="Decrementar">
					<i class="fas fa-arrow-circle-down"></i>
				</button>
			</a>
		</div>
	</div>
	<div class="Player">
		<h1 class="Titulo">Karu</h1>
		<div class="IMG">
			<img src="img\lin fei.png" style="transform: scaleX(-1);">
		</div>
		<div class="IMGBaixo">
			<h1 class="">Matou o leo <span id="karu_tk">PLACEHOLDER</span> vezes</h1>
			<a href="?tela=tk&&vacilo=karu_tk">
				<button class="Button Up" id="karu" data-tool-tip="Incrementark">
					<i class="fas fa-arrow-circle-up"></i>
				</button>
			</a>
			<a href="?tela=tk&&equivoco=karu_tk">
				<button class="Button Down" id="karu" data-tool-tip="Decrementar">
					<i class="fas fa-arrow-circle-down"></i>
				</button>
			</a>
		</div>
	</div>
</div>
