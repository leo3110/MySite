<?php
// Busca da API
class APIBrawl {
    private $brawlIdLeo = "3093987";
    private $brawlIdKaru = "47506890";
    private $apiKey = "MIZ5D0IBHUWGN6BMF9UB";
    private $statKaru = 0;
    private $statLeo = 0;
    public function getStatKaru(){ return $this->statKaru;}
    public function setStatKaru($karu){ $this->statKaru = $karu;}
    public function getStatLeo(){ return $this->statLeo;}
    public function setStatLeo($leo){ $this->statLeo = $leo;}

    function __construct() {
        ob_start();
        include "https://api.brawlhalla.com/player/$this->brawlIdKaru/stats?api_key=$this->apiKey";
        setStatKaru(ob_get_contents());
        ob_clean();
        include "https://api.brawlhalla.com/player/$this->brawlIdLeo/stats?api_key=$this->apiKey";
        setStatLeo(ob_get_contents());
        ob_end_clean();
    }
    static function changeKey($a,$b){
        $a = $b["$a"];
        return $a;
    }
    static function clean($clean){
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
    static function printSolo($a,$b){
        echo "Detalhes do Leo<br>";
        echo changeKey("level",$b).": ".$a['level']."<br>";
        echo changeKey("xp_percentage",$b).": ".clean($a['xp_percentage'])."<br>";
        echo changeKey("games",$b).": ".$a['games']."<br>";
        echo changeKey("wins",$b).": ".$a['wins']."<br>";
        echo "Derrotas: ";
        echo $a['games']-$a['wins'];
    }
    static function printTKKaru(){
        $teste = $this->getStatKaru();
        foreach ($teste['legends'] as $legends => $value) {
            $this->tkKaru = $this->tkKaru + $value['teamkos'];
        }
        echo $tkKaru;
    }
    static function printTKLeo(){
        $this->statLeo = json_decode($this->statLeo,true);
        $tkLeo;
        foreach ($this->statLeo['legends'] as $legends => $value) {
            $tkLeo = $tkLeo + $value['teamkos'];
        }
        ob_end_clean();
        echo $tkLeo;
    }
    static function printLeo(){
        $player = json_decode(getStatLeo(),true);
        $keys = fopen("db/keys.json",'r') or die("erro ao abrir arquivo chaves");
        $keys = fread($keys, filesize("db/keys.json"));
        $keys = json_decode($keys,true);
        foreach ($player as $info => $valor) {
            switch ($info) {
                case 'legends':
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
                break;
                case 'clan':
                echo "Clan {<br>";
                foreach ($valor as $clanKey => $clanVal) {
                    echo "$clanKey: $clanVal<br>";
                }
                echo "}<br>";
                default:
                echo changeKey($info,$keys).": $valor<br>";
                break;
            }
        }
    }
}
