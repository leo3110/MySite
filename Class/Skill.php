<?php
class Skill {
    public static function returnSkill($a) {
        $bankR = fopen('../../db/Skill.json','r') or die('erro ao abrir habilidades');
        $bankR = fread($bankR,filesize('../../db/Skill.json'));
        $bankR = json_decode($bankR,true);
        foreach ($a as $original => $valoriginal) {
            $habilidades["$valoriginal"] = "";
            foreach ($bankR as $habilidade => $arrayatrib) {
                if (array_key_exists($habilidade,$habilidades)) $habilidades["$habilidade"]=$arrayatrib;
            }
        }
        return $habilidades;
    }
}
