<?php
class Habilidades {
    public static function returnHabil($a) {
        $bancoR = fopen('../../db/Habilidades.json','r') or die('erro ao abrir habilidades');
        $bancoR = fread($bancoR,filesize('../../db/Habilidades.json'));
        $bancoR = json_decode($bancoR,true);
        foreach ($a as $original => $valoriginal) {
            $habilidades["$valoriginal"] = "asd";
            foreach ($bancoR as $habilidade => $arrayatrib) {
                if (array_key_exists($habilidade,$habilidades)) $habilidades["$habilidade"]=$arrayatrib;
            }
        }
        return $habilidades;
    }
}
