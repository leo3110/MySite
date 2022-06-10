<?php
// Busca da API
$brawlIdLeo = "3093987";
$brawlIdKaru = "47506890";
$apiKey = "MIZ5D0IBHUWGN6BMF9UB";
// $urlBrawlId = "https://api.brawlhalla.com/search?steamid=$steamId&api_key=$apiKey";
ob_start();



include "https://api.brawlhalla.com/player/$brawlIdKaru/stats?api_key=$apiKey";
$urlStatKaru = ob_get_contents();
$urlStatKaru = json_decode($urlStatKaru,true);
foreach ($urlStatKaru['legends'] as $legends => $value) {
    if ($value == "teamkos") {
        echo $value;
    }
}
ob_clean();



include "https://api.brawlhalla.com/player/$brawlIdLeo/stats?api_key=$apiKey";
$urlStatLeo = ob_get_contents();
$player = json_decode($urlStatLeo,true);
ob_end_clean();
echo $tkKaru;//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
unset($urlStatLeo);
$keys = fopen("db/keys.json",'r') or die("erro ao abrir arquivo chaves");
$keys = fread($keys, filesize("db/keys.json"));
$keys = json_decode($keys,true);
function clean($clean){
    switch (gettype($clean)) {
        case "double":
            $clean = $clean*100;
            $clean = round($clean)."%";
            return $clean;
            break;
        case "string":
            return ucfirst($clean);
            break;
        default:
            return $clean;
            break;
    }
}
function changeKey($a,$b){
    $a = $b["$a"];
    return $a;
}
function printSolo($a,$b){
    echo "Detalhes do Leo<br>";
    echo changeKey("level",$b).": ".$a['level']."<br>";
    echo changeKey("xp_percentage",$b).": ".clean($a['xp_percentage'])."<br>";
    echo changeKey("games",$b).": ".$a['games']."<br>";
    echo changeKey("wins",$b).": ".$a['wins']."<br>";
    echo "Derrotas: ";
    echo $a['games']-$a['wins'];
}
// function completeSearch(){
printSolo($player,$keys);
    // foreach ($player as $info => $valor) {
    //     if ($info =='legends') {
    //         for ($i=0; $i < sizeof($valor); $i++) {
    //             echo "<div class='Legend'>";
    //             echo "<h1 class='LegendName'>".$valor["$i"]["legend_name_key"]."</h1>";
    //             echo "<div class='InfoLegend Flex Wrap'>";
    //             foreach ($valor["$i"] as $lenda => $stat) {
    //                 if ($lenda != "legend_name_key") {
    //                     echo "<div class='InfoLegendItem Flex Col Centro ShadowEffect'><span>".changeKey($lenda,$keys)."</span><span>".clean($stat)."</span>";
    //                     echo "</div>";
    //                 }
    //             }
    //             echo "</div>";
    //             echo "</div>";
    //         }
    //     }
    //     if ($info != "clan" && $info != "legends"){
    //         echo changeKey($info,$keys).": $valor<br>";
    //     }
    //     if ($info == "clan") {
    //         echo "Clan {<br>";
    //         foreach ($valor as $clanKey => $clanVal) {
    //             echo "$clanKey: $clanVal<br>";
    //         }
    //         echo "}<br>";
    //     }
    // }
// }
unset($player);
unset($keys);
