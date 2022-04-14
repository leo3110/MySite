<?php
  class Armas {
    public function returnArmas($a){
        $bancoR = fopen('DB/Armas.json','r') or die('erro ao abrir armas');
        $json = fread($bancoR,filesize('DB/Armas.json'));
        $json = json_decode($json);
        $armas= array();
        foreach ($a as $original => $valoriginal) {
            $armas["$valoriginal"] = array();
        }
        foreach ($json as $arma => $arrayatribs) {
            if (array_key_exists($arma,$armas)) {
                foreach ($arrayatribs as $key => $value) {
                    array_push($armas["$arma"],$value);
                }
            }
        }
        return $armas;
    }
  }
