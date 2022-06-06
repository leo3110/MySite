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
$keys = fopen("db/keys.json",'r') or die("erro ao abrir arquivo chaves");
$keys = fread($keys, filesize("db/keys.json"));
$keys = json_decode($keys,true);
function clean($clean){
    if (gettype($clean) == "double") {
        $clean = $clean*100;
        $clean = round($clean)."%";
        return $clean;
    }
    else if (gettype($clean) == "string") {
        return ucfirst($clean);
    }
    else {
        return $clean;
    }
}
function changeKey($a,$b){
    $a = $b["$a"];
    return $a;
}
// function completeSearch(){
    foreach ($player as $info => $valor) {
        if ($info =='legends') {
            for ($i=0; $i < sizeof($valor); $i++) {
                echo "<div class='Legend'>";
                echo "<h1 class='LegendName'>".$valor["$i"]["legend_name_key"]."</h1>";
                echo "<div class='InfoLegend Flex Wrap'>";
                foreach ($valor["$i"] as $lenda => $stat) {
                    if ($lenda != "legend_name_key") {
                        echo "<div class='InfoLegendItem Flex Col Centro ShadowEffect'><span>".changeKey($lenda,$keys)."</span><span>".clean($stat)."</span>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                echo "</div>";
            }
        }
        if ($info != "clan" && $info != "legends"){
            echo changeKey($info,$keys).": $valor<br>";
        }
        if ($info == "clan") {
            echo "Clan {<br>";
            foreach ($valor as $clanKey => $clanVal) {
                echo "$clanKey: $clanVal<br>";
            }
            echo "}<br>";
        }
    }
// }
unset($player);
unset($keys);
