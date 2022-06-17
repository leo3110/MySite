<?php
class Character{
    private $Nome,$Nivel,$Raca,$Vigor,$Forca,$Destr,$Agili,$Resis,$Intel,$Conhe,$Inven,$Weapon,$Skill,$Equip;
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
    public function getWeapon(){return $this->Weapon;}
    public function setWeapon($Weapon){$this->Weapon = $Weapon;}
    public function getSkill(){return $this->Skill;}
    public function setSkill($Skill){$this->Skill = $Skill;}
    public function getEquip(){return $this->Equip;}
    public function setEquip($Equip){$this->Equip = $Equip;}
    function __construct(){
        $bancoR = fopen('../../db/'.$_SESSION['char'].'.json','r') or die('erro ao consultar char');
        $bancoR = fread($bancoR,filesize('../../db/'.$_SESSION['char'].'.json'));
        $bancoR = json_decode($bancoR,true);
        $this->setNome($bancoR['Nome']);
        $this->setNivel($bancoR['Nivel']);
        $this->setRaca($bancoR['Raca']);
        $this->setVigor($bancoR['Vigor']);
        $this->setForca($bancoR['Forca']);
        $this->setDestr($bancoR['Destr']);
        $this->setAgili($bancoR['Agili']);
        $this->setResis($bancoR['Resis']);
        $this->setIntel($bancoR['Intel']);
        $this->setConhe($bancoR['Conhe']);
        $this->setInven($bancoR['Inven']);
        $this->setWeapon($bancoR['Weapon']);
        $this->setSkill($bancoR['Skill']);
        $this->setEquip($bancoR['Equip']);
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
    function printWeapon(){
        include_once 'Weapon.php';
        foreach (Weapon::returnWeapon($this->getWeapon()) as $key => $value) {
            echo "<div class='Arma Flex JCSB'>";
            echo "<div ";
            foreach ($value as $kkey => $vvalue) {
                echo "$kkey='$vvalue' ";
            }
            echo ">".$value['name']."</div>";
            echo "</div>";
        }
    }
    function printSkill(){
        include_once 'Skill.php';
        foreach (Skill::returnSkill($this->getSkill()) as $key => $value) {
            echo "<div class='Skillidade'>";
            echo "<span ";
            foreach ($value as $kkey => $vvalue) {
                echo "$kkey='$vvalue' ";
            }
            echo ">".$value['name']."</span>";
            echo "</div>";
        }
    }
    function printEquip(){
        include_once 'Equipment.php';
        $equips = 6;
        foreach (Equipment::returnEquip($this->getEquip()) as $key => $value) {
            echo "<div class='Equipamento Flex Col'";
            foreach ($value['bonus'] as $chave => $valor) {
                echo "$chave='$valor'";
            }
            echo "pas='".$value['pas']."' desc='".$value['desc']."'>";
            echo "<span>".$value['name']."</span>";
            echo "<div class='Botao'>";
            echo "</div>";
            echo "</div>";
            $equips--;
        }
        while ($equips) {
            echo "<div class='Equipamento Flex Col'>
                    <span>Vazio</span>
                    <div class='Botao'>
                    </div>
                </div>";
            $equips--;
        }
    }
}
