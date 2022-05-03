<?php
class Equipamento{
    public static function returnEquip($a) {
        $bancoR = fopen('../../db/Equipamentos.json','r') or die('erro ao abrir equipamentos');
        $bancoR = fread($bancoR,filesize('../../db/Equipamentos.json'));
        $bancoR = json_decode($bancoR,true);
        foreach ($a as $original => $valoriginal) {
            $equis["$valoriginal"] = "asd";
            foreach ($bancoR as $equi => $arrayatrib) {
                if (array_key_exists($equi,$equis)) $equis["$equi"]=$arrayatrib;
            }
        }
        return $equis;
    }
}
