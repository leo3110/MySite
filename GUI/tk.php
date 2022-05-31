<main>
    <a href="#Teste"><button type="button" name="button">Teste</button></a>
    <script type="text/javascript">
    $(function(){
        <?php TKSearch(); ?>
        $(".Button").click(function(){
            var btn = $(this).attr("alvo");
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                document.getElementById(btn).innerHTML = this.responseText;
            };
            var a = $(this).attr("alvo");
            var b = $(this).attr("objetivo");
            xmlhttp.open("get","script/ajax.php?a="+a+"&&b="+b, true);
            xmlhttp.send();
        })
    });
</script>
<div class="TK FullWidth FullHeight">
    <div class="Player">
        <h6 class="Titulo">Leo</h6>
        <div class="IMG">
            <img src="img/jaeyun.png">
        </div>
        <div class="IMGDown">
            <h6 class="">Matou o karu <span id="leo_tk">0</span> vezes</h6>
            <button class="Button Up" id="Manda" alvo='leo_tk' objetivo="Incrementa">
                <i class="fas fa-arrow-circle-up"></i>
            </button>
            <button class="Button Down" id="Manda" alvo='leo_tk' objetivo="Decrementa">
                <i class="fas fa-arrow-circle-down"></i>
            </button>
        </div>
    </div>
    <div class="Player">
        <h6 class="Titulo">Karu</h6>
        <div class="IMG">
            <img src="img/lin fei.png" style="transform: scaleX(-1);">
        </div>
        <div class="IMGDown">
            <h6 class="">Matou o leo <span id="karu_tk">0</span> vezes</h6>
            <button class="Button Up" id="Manda" alvo='karu_tk' objetivo="Incrementa">
                <i class="fas fa-arrow-circle-up"></i>
            </button>
            <button class="Button Down" id="Manda" alvo='karu_tk' objetivo="Decrementa">
                <i class="fas fa-arrow-circle-down"></i>
            </button>
        </div>
    </div>
</div>
<div id="Teste" class="Teste FullWidth FullHeight Flex Wrap">
    <?php include 'script/api.php'; ?>
</div>
</main>
