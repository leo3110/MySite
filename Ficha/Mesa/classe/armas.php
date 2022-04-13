<?php
  class Armas {
    private $Nome,$Vigor,$Forca,$Destr,$Agili,$Resis,$Intel,$Conhe,$Passi,$Descr;
    // public function getNome(){return $this->Nome;}
    // public function setNome($Nome){$this->Nome = $Nome;}
    // public function getVigor(){return $this->Vigor;}
    // public function setVigor($Vigor){$this->Vigor = $Vigor;}
    // public function getForca(){return $this->Forca;}
    // public function setForca($Forca){$this->Forca = $Forca;}
    // public function getDestr(){return $this->Destr;}
    // public function setDestr($Destr){$this->Destr = $Destr;}
    // public function getAgili(){return $this->Agili;}
    // public function setAgili($Agili){$this->Agili = $Agili;}
    // public function getResis(){return $this->Resis;}
    // public function setResis($Resis){$this->Resis = $Resis;}
    // public function getIntel(){return $this->Intel;}
    // public function setIntel($Intel){$this->Intel = $Intel;}
    // public function getConhe(){return $this->Conhe;}
    // public function setConhe($Conhe){$this->Conhe = $Conhe;}
    // public function getPassi(){return $this->Passi;}
    // public function setPassi($Passi){$this->Passi = $Passi;}
    // public function getDescr(){return $this->Descr;}
    // public function setDescr($Descr){$this->Descr = $Descr;}
    public function returnArmas($a){
        $bancoR = fopen('DB/Armas.json','r') or die('erro ao abrir armas');
        $json = fread($bancoR,filesize('DB/Armas.json'));
        $json = json_decode($json);
        $armas= array();
        foreach ($a as $original => $valoriginal) {
            $armas["$valoriginal"] = [];
        }
        foreach ($json as $consulta => $valconsulta) {
            if (array_key_exists($consulta,$armas)) {
                array_push($armas["$consulta"],$valconsulta);
            }
        }
        print_r($armas);
        foreach ($armas as $key => $value) {
            echo "$key $value";
        }
    }
  }
