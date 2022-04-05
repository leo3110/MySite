<?php
  class Personagem {
    private $nome,$nivel,$raca,$vigor,$forca,$destr,$agili,$resis,$intel,$conhe,$inven;
    public function getNome(){return $this->nome;}
    public function setNome($nome){$this->nome = $nome;}
    public function getNivel(){return $this->nivel;}
    public function setNivel($nivel){$this->nivel = $nivel;}
    public function getRaca(){return $this->raca;}
    public function setRaca($raca){$this->raca = $raca;}
    public function getVigor(){return $this->vigor;}
    public function setVigor($vigor){$this->vigor = $vigor;}
    public function getForca(){return $this->forca;}
    public function setForca($forca){$this->forca = $forca;}
    public function getDestr(){return $this->destr;}
    public function setDestr($destr){$this->destr = $destr;}
    public function getAgili(){return $this->agili;}
    public function setAgili($agili){$this->agili = $agili;}
    public function getResis(){return $this->resis;}
    public function setResis($resis){$this->resis = $resis;}
    public function getIntel(){return $this->intel;}
    public function setIntel($intel){$this->intel = $intel;}
    public function getConhe(){return $this->conhe;}
    public function setConhe($conhe){$this->conhe = $conhe;}
    public function getInven(){return $this->inven;}
    public function setInven($inven){$this->inven = $inven;}
    function printObj(){
        $json = json_encode(array($this->nome,$this->nivel,$this->raca,$this->vigor,$this->forca,$this->destr,$this->agili,$this->resis,$this->intel,$this->conhe,$this->inven));
        print_r($json);

    }
  }
