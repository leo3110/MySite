<?php
// Busca da API
$brawlIdLeo = "3093987";
$brawlIdKaru = "47506890";
$apiKey = "MIZ5D0IBHUWGN6BMF9UB";

ob_start();
include "https://api.brawlhalla.com/player/$brawlIdKaru/stats?api_key=$apiKey";
$statKaru = ob_get_contents();
ob_end_clean();
ob_start();
include "https://api.brawlhalla.com/player/$brawlIdLeo/stats?api_key=$apiKey";
$statLeo = ob_get_contents();
ob_end_clean();
function changeKey($a,$b){
    $a = $b["$a"];
    return $a;
}
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
function printTKPlayer($a){
    $tk = 0;
    $a = json_decode($a,true);
    foreach ($a['legends'] as $legends => $value) {
        $tk = $tk + $value['teamkos'];
    }
    return $tk;
}
function printTKLeo(){
    $statLeo = json_decode($statLeo,true);
    foreach ($statLeo['legends'] as $legends => $value) {
        $tkLeo = $tkLeo + $value['teamkos'];
    }
    echo $tkLeo;
}
function printLeo($a){
    $player = json_decode($a,true);
    $keys = fopen("db/keys.json",'r') or die("erro ao abrir arquivo chaves");
    $keys = fread($keys, filesize("db/keys.json"));
    $keys = json_decode($keys,true);
    foreach ($player as $info => $value) {
        switch ($info) {
            case 'legends':
            for ($i=0; $i < sizeof($value); $i++) {
                echo "<div class='Legend col-3'>";
                echo "<h1 class='LegendName'>".clean($value["$i"]["legend_name_key"])."</h1>";
                echo "<div class='InfoLegend Flex Wrap'>";
                foreach ($value["$i"] as $lenda => $stat) {
                    if ($lenda != "legend_name_key") {
                        echo "<div class='InfoLegendItem Flex Col Centro ShadowEffect'><span>".changeKey($lenda,$keys)."</span><span>".clean($stat)."</span>";
                        echo "</div>";
                    }
                }
                echo "</div>";
                echo "</div>";
            }
        	break;
            // case 'clan':
            // echo "Clan {<br>";
            // foreach ($value as $clanKey => $clanVal) {
            //     echo "$clanKey: $clanVal<br>";
            // }
            // echo "}<br>";
			// break;
			case 'name':
				echo "<div><div class='GeneralInfo NameInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'games':
				$games = clean($value);
				echo "<div class='GeneralInfo GamesInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'wins':
				echo "<div class='GeneralInfo WinsInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
				echo "<div class='GeneralInfo LossesInfo'>Derrotas:";
				echo $games - clean($value);
				unset($games);
				echo "</div>";
			break;
			case 'level':
				echo "<div class='GeneralInfo LevelInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'xp_percentage':
				echo "<div class='GeneralInfo PercentageInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'damagebomb':
				$danoGadget = clean($value);
			break;
			case 'damagemine':
				$danoGadget = $danoGadget + clean($value);
			break;
			case 'damagespikeball':
				$danoGadget = $danoGadget + clean($value);
				echo "<div class='GeneralInfo DamageGadgetInfo'>Dano com arremessáveis: ".$danoGadget."</div>";
				unset($danoGadget);
			break;
			case 'kobomb':
				$koGadget = clean($value);
			break;
			case 'komine':
				$koGadget = $koGadget + clean($value);
			break;
			case 'kospikeball':
				$koGadget = $koGadget + clean($value);
				echo "<div class='GeneralInfo DamageGadgetInfo'>Nocautes com arremessáveis: ".$koGadget."</div>";
				unset($koGadget);
			break;
			case 'damagesidekick':
				echo "<div class='GeneralInfo DamageSidekickInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'xp':
				echo "<div class='GeneralInfo XpInfo'>".changeKey($info,$keys).": ".clean($value)."</div>";
			break;
			case 'kosidekick':
				echo "<div class='GeneralInfo KoSidekickInfo'>".changeKey($info,$keys).": ".clean($value)."</div></div>";
			break;
        }
    }
}
