<?php
class Equipamento{
    public static function returnEquip($a) {
        $bancoR = fopen('DB/Equipamentos.json','r') or die('erro ao abrir equipamentos');
        $bancoR = fread($bancoR,filesize('DB/Equipamentos.json'));
        $bancoR = json_decode($bancoR,true);
        foreach ($a as $original => $valoriginal) {
            $equipamentos["$valoriginal"] = "asd";
            // foreach ($bancoR as $equipamento => $arrayatrib) {
            //     if (array_key_exists($equipamento,$equipamentos)) $equipamentos["$equipamento"]=$arrayatrib;
            // }
        }
        print_r($bancoR);
        // return $equipamentos;
        // return $bancoR;
    }
}
