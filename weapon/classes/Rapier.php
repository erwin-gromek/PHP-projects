<?php
require_once("Melee.php");
class Rapier extends Melee{
    private string $rapierSkill1;
    private string $rapierSkill2;

    function __construct($type, $name, $dps, $blade_length, $hands_required, $rapierSkill1, $rapierSkill2){
        parent::__construct($type, $name, $dps, $blade_length, $hands_required);
        $this->rapierSkill1 = $rapierSkill1;
        $this->rapierSkill2 = $rapierSkill2;
    }
    function get_rapierSkill1(){
        return $this->rapierSkill1;
    }
    function get_rapierSkill2(){
        return $this->rapierSkill2;
    }
    function set_rapierSkill1($rapierSkill1) {
        if(is_string($rapierSkill1))
        $this->rapierSkill1 = $rapierSkill1;
        else
        echo "Zły typ danych";
    }
    function set_rapierSkill2($rapierSkill2) {
        if(is_string($rapierSkill2))
        $this->rapierSkill2 = $rapierSkill2;
        else
        echo "Zły typ danych";
    }
    function RapierSkill1(){
        echo "Wykonuje umiejętność".$this->rapierSkill1.".";
    }
}
?>