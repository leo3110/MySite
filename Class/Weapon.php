<?php
class Weapon {
    public static function returnWeapons($a){
        $BankR = fopen('../../db/Weapon.json','r') or die('erro ao abrir weapons');
        $BankR = fread($BankR,filesize('../../db/Weapon.json'));
        $BankR = json_decode($BankR,true);
        foreach ($a as $original => $valueOriginal) {
            $weapons["$valueOriginal"] = "";
            foreach ($BankR as $weapon => $arrayatrib) {
                if (array_key_exists($weapon,$weapons)) $weapons["$weapon"]=$arrayatrib;
            }
        }
        return $weapons;
    }
}
