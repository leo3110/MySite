<?php
class Equipment{
    public static function returnEquip($a) {
        $bankR = fopen('../../db/Equipment.json','r') or die('erro ao abrir equipamentos');
        $bankR = fread($bankR,filesize('../../db/Equipment.json'));
        $bankR = json_decode($bankR,true);
        foreach ($a as $original => $valueOriginal) {
            $equis["$valueOriginal"] = "";
            foreach ($bankR as $equi => $arrayatrib) {
                if (array_key_exists($equi,$equis)) $equis["$equi"]=$arrayatrib;
            }
        }
        return $equis;
    }
}
