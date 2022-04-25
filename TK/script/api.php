<?php
// Busca da API
// $steamId = "76561198274198272";
// $brawlhallaIdLeo = "3093987";
// $brawlhallaIdKaru = "47506890";
// $apiKey = "MIZ5D0IBHUWGN6BMF9UB";
// $url = "https://api.brawlhalla.com/search?steamid=$steamId&api_key=$apiKey";
// $urlStatPlayer = "https://api.brawlhalla.com/player/$brawlhallaIdKaru/stats?api_key=$apiKey";
// include "$urlStatPlayer";
$player = fopen("db/apiBase.json",'r') or die("erro ao abrir arquivo base");
$player = fread($player, filesize("db/apiBase.json"));
$player = json_decode($player,true);
foreach ($player as $info => $valor) {
    if ($info != "clan" && $info != "legends"){
        echo "$info: $valor<br>";
    }
    if ($info =='legends') {
        for ($i=0; $i < sizeof($valor); $i++) {
            echo "<div class='Lenda'>";
            echo "<h3 class='LendaNome'>".$valor["$i"]["legend_name_key"]."</h3>";
            echo "<div class='InfoLenda Flex Wrap'>";
            foreach ($valor["$i"] as $lenda => $stat) {
                if ($lenda != "legend_name_key") {
                    echo "<div class='InfoLendaItem'>$lenda: $stat</div>";
                }
            }
            echo "</div>";
            echo "</div>";
        }
    }
    if ($info == "clan") {
        echo "Clan {<br>";
        foreach ($valor as $clanKey => $clanVal) {
            echo "$clanKey: $clanVal<br>";
        }
        echo "}<br>";
    }
}
