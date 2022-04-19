<?php
class Personagem{
    private $Nome,$Nivel,$Raca,$Vigor,$Forca,$Destr,$Agili,$Resis,$Intel,$Conhe,$Inven,$Armas,$Habil,$Equip;
    public function getNome(){return $this->Nome;}
    public function setNome($Nome){$this->Nome = $Nome;}
    public function getNivel(){return $this->Nivel;}
    public function setNivel($Nivel){$this->Nivel = $Nivel;}
    public function getRaca(){return $this->Raca;}
    public function setRaca($Raca){$this->Raca = $Raca;}
    public function getVigor(){return $this->Vigor;}
    public function setVigor($Vigor){$this->Vigor = $Vigor;}
    public function getForca(){return $this->Forca;}
    public function setForca($Forca){$this->Forca = $Forca;}
    public function getDestr(){return $this->Destr;}
    public function setDestr($Destr){$this->Destr = $Destr;}
    public function getAgili(){return $this->Agili;}
    public function setAgili($Agili){$this->Agili = $Agili;}
    public function getResis(){return $this->Resis;}
    public function setResis($Resis){$this->Resis = $Resis;}
    public function getIntel(){return $this->Intel;}
    public function setIntel($Intel){$this->Intel = $Intel;}
    public function getConhe(){return $this->Conhe;}
    public function setConhe($Conhe){$this->Conhe = $Conhe;}
    public function getInven(){return $this->Inven;}
    public function setInven($Inven){$this->Inven = $Inven;}
    public function getArmas(){return $this->Armas;}
    public function setArmas($Armas){$this->Armas = $Armas;}
    public function getHabil(){return $this->Habil;}
    public function setHabil($Habil){$this->Habil = $Habil;}
    public function getEquip(){return $this->Equip;}
    public function setEquip($Equip){$this->Equip = $Equip;}
    function __construct(){
        $bancoR = fopen('DB/'.$_SESSION['personagem'].'.json','r') or die('erro ao consultar personagem');
        $json = fread($bancoR,filesize('DB/'.$_SESSION['personagem'].'.json'));
        $json = json_decode($json,true);
        $this->setNome($json['Nome']);
        $this->setNivel($json['Nivel']);
        $this->setRaca($json['Raca']);
        $this->setVigor($json['Vigor']);
        $this->setForca($json['Forca']);
        $this->setDestr($json['Destr']);
        $this->setAgili($json['Agili']);
        $this->setResis($json['Resis']);
        $this->setIntel($json['Intel']);
        $this->setConhe($json['Conhe']);
        $this->setInven($json['Inven']);
        $this->setArmas($json['Armas']);
        $this->setHabil($json['Habil']);
        $this->setEquip($json['Equip']);
    }
    function printAtrib(){
        echo "<div>".$this->getVigor()."</div>";
        echo "<div>".$this->getForca()."</div>";
        echo "<div>".$this->getDestr()."</div>";
        echo "<div>".$this->getAgili()."</div>";
        echo "<div>".$this->getResis()."</div>";
        echo "<div>".$this->getIntel()."</div>";
        echo "<div>".$this->getConhe()."</div>";
    }
    function printName(){
        echo "<h1>";
        echo "<div>".$this->getNome()." - ".$this->getRaca()."</div>";
        echo "<div>Nivel: ".$this->Nivel."</div>";
        echo "</h1>";
    }
    function printArmas(){
        include_once 'armas.php';
        echo "<h3>";
        foreach (Armas::returnArmas($this->getArmas()) as $key => $value) {
            echo "<div class='Arma Flex JCSB'>";
            echo "<div ";
            foreach ($value as $kkey => $vvalue) {
                echo "$kkey='$vvalue' ";
            }
            echo ">".$value['nome']."</div>";
            echo "</div>";
        }
        echo "</h3>";
    }
    function printHabilidades(){
        include_once 'habilidades.php';
        foreach (Habilidades::returnHabil($this->getHabil()) as $key => $value) {
            echo "<div class='Habilidade'>";
            echo "<span ";
            foreach ($value as $kkey => $vvalue) {
                echo "$kkey='$vvalue' ";
            }
            echo ">".$value['nome']."</span>";
            echo "</div>";
        }
    }
}
