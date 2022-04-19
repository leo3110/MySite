<?php
class Armas {
    public static function returnArmas($a){
        $bancoR = fopen('DB/Armas.json','r') or die('erro ao abrir armas');
        $bancoR = fread($bancoR,filesize('DB/Armas.json'));
        $bancoR = json_decode($bancoR,true);
        foreach ($a as $original => $valoriginal) {
            $armas["$valoriginal"] = "asd";
            foreach ($bancoR as $arma => $arrayatrib) {
                if (array_key_exists($arma,$armas)) $armas["$arma"]=$arrayatrib;
            }
        }
        return $armas;
    }
}
