<?php
require_once("Melee.php");
class Sword extends Melee{
    private string $swordSkill1;
    private string $swordSkill2;

    function __construct($type, $name, $dps, $blade_length, $hands_required, $swordSkill1, $swordSkill2){
        parent::__construct($type, $name, $dps, $blade_length, $hands_required);
        $this->swordSkill1 = $swordSkill1;
        $this->swordSkill2 = $swordSkill2;
    }
    function get_swordSkill1(){
        return $this->swordSkill1;
    }
    function get_swordSkill2(){
        return $this->swordSkill2;
    }
    function set_swordSkill1($swordSkill1) {
        if(is_string($swordSkill1))
        $this->swordSkill1 = $swordSkill1;
        else
        echo "Zły typ danych";
    }
    function set_swordSkill2($swordSkill2) {
        if(is_string($swordSkill1))
        $this->swordSkill2 = $swordSkill2;
        else
        echo "Zły typ danych";
    }
    function SwordSkill1(){
        echo "Wykonuje umiejętność".$this->swordSkill1.".";
    }
}
?>