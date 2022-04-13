<?php
include 'armas.php';
class Personagem extends Armas{
    private $Nome,$Nivel,$Raca,$Vigor,$Forca,$Destr,$Agili,$Resis,$Intel,$Conhe,$Inven,$Armas,$Equip;
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
    public function getEquip(){return $this->Equip;}
    public function setEquip($Equip){$this->Equip = $Equip;}
    function __construct(){
        $this->setNome($_SESSION['personagem']);
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
        $this->setEquip($json['Equip']);

    }
    // function printObj(){
    //     $json = json_encode(array('Nome'=>$this->Nome,'Nivel'=>$this->Nivel,'Raca'=>$this->Raca,'Vigor'=>$this->Vigor,'Forca'=>$this->Forca,'Destr'=>$this->Destr,'Agili'=>$this->Agili,'Resis'=>$this->Resis,'Intel'=>$this->Intel,
    //     'Conhe'=>$this->Conhe,'Inven'=>$this->Inven));
    //     $bancoE = fopen('DB/'.$_GET['char'].'.json','w') or die('erro ao salvar personagem');
    //     fwrite($bancoE,$json);
    //     fclose($bancoE);
    // }
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
        echo "<h3>";
        $this->returnArmas($this->getArmas());
        echo "</h3>";
    }
}
