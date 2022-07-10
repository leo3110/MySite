		<?php
define("brawlIdLeo","3093987");
define("brawlIdKaru", "47506890");
define("apiKey", "MIZ5D0IBHUWGN6BMF9UB");
function queryAPI($a,$b){
	ob_start();
	include "https://api.brawlhalla.com/player/$a/stats?api_key=$b";
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
$statKaru = queryAPI(brawlIdKaru,apiKey);
$statLeo = queryAPI(brawlIdLeo,apiKey);
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
function printTudo($a){
	try {
		if (isset($_GET['a'])) $a = queryAPI($_GET['a'],apiKey);
	} catch (Exception $e) {
		echo "Id Steam/Brawlhalla inválida, L53APITK";
	}
    $player = json_decode($a,true);
    $keys = fopen("db/keys.json",'r') or die("erro ao abrir arquivo chaves");
    $keys = fread($keys, filesize("db/keys.json"));
    $keys = json_decode($keys,true);
    foreach ($player as $info => $value) {
        switch ($info) {
            case 'legends':
            for ($i=0; $i < sizeof($value); $i++) {
                echo "<div class='Legend Flex Col JCSA Centro'>";
                echo "<h1 class='LegendName'>".clean($value["$i"]["legend_name_key"])."</h1>";
                echo "<div class='InfoLegend Flex Wrap JCSA'>";
                foreach ($value["$i"] as $lenda => $stat) {
                    if ($lenda != "legend_name_key") {
                        echo "<div class='InfoLegendItem Flex Col Centro'><span>".changeKey($lenda,$keys)."</span><h2>".clean($stat)."</h2>";
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
				echo "<div class='GeneralInfo Flex Wrap JCSA'><div class='NameInfo'>".clean($value)."   <i class=\"fa-brands fa-steam\"></i></div>";
			break;
			case 'games':
				$games = clean($value);
				echo "<div class='AllInfo GamesInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
			break;
			case 'wins':
				echo "<div class='AllInfo WinsInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
				echo "<div class='AllInfo LossesInfo Flex Centro'><span>Derrotas:";
				echo $games - clean($value);
				unset($games);
				echo "</span></div>";
			break;
			case 'level':
				echo "<div class='AllInfo LevelInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
			break;
			case 'xp_percentage':
				echo "<div class='AllInfo PercentageInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
			break;
			case 'damagebomb':
				$danoGadget = clean($value);
			break;
			case 'damagemine':
				$danoGadget = $danoGadget + clean($value);
			break;
			case 'damagespikeball':
				$danoGadget = $danoGadget + clean($value);
				echo "<div class='AllInfo DamageGadgetInfo Flex Centro'><span>Dano com arremessáveis: ".$danoGadget."</span></div>";
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
				echo "<div class='AllInfo DamageGadgetInfo Flex Centro'><span>Nocautes com arremessáveis: ".$koGadget."</span></div>";
				unset($koGadget);
			break;
			case 'damagesidekick':
				echo "<div class='AllInfo DamageSidekickInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
			break;
			case 'xp':
				echo "<div class='AllInfo XpInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div>";
			break;
			case 'kosidekick':
				echo "<div class='AllInfo KoSidekickInfo Flex Centro'><span>".changeKey($info,$keys).": ".clean($value)."</span></div></div>";
			break;
        }
    }
}
