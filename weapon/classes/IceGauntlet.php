<?php
require_once("Magic.php");
class IceGauntlet extends Magic{
    private string $iceGauntletSkill1;
    private string $iceGauntletSkill2;

    function __construct($type, $name, $dps, $aoe_radius, $element, $iceGauntletSkill1, $iceGauntletSkill2){
        parent::__construct($type, $name, $dps, $aoe_radius, $element);
        $this->iceGauntletSkill1 = $iceGauntletSkill1;
        $this->iceGauntletSkill2 = $iceGauntletSkill2;
    }
    function get_iceGauntletSkill1(){
        return $this->iceGauntletSkill1;
    }
    function get_iceGauntletSkill2(){
        return $this->iceGauntletSkill2;
    }
    function set_iceGauntletSkill1($iceGauntletSkill1) {
        if(is_string($iceGauntletSkill1))
        $this->iceGauntletSkill1 = $iceGauntletSkill1;
        else
        echo "Zły typ danych";
    }
    function set_iceGauntletSkill2($iceGauntletSkill2) {
        if(is_string($iceGauntletSkill2))
        $this->iceGauntletSkill2 = $iceGauntletSkill2;
        else
        echo "Zły typ danych";
    }
    function iceGauntletSkill1(){
        echo "Wykonuje umiejętność".$this->iceGauntletSkill1.".";
    }
}
?>