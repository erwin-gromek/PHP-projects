<?php
require_once("Weapon.php");
class Magic extends Weapon{
    private float $aoe_radius;
    private string $element;

    function __construct($type, $name, $dps, $aoe_radius, $element){
        parent::__construct($type, $name, $dps);
        $this->aoe_radius = $aoe_radius;
        $this->element = $element;
    }
    function get_aoe_radius(){
        return $this->aoe_radius;
    }
    function get_element(){
        return $this->element;
    }
    function set_aoe_radius($aoe_radius) {
        if(is_numeric($aoe_radius))
        $this->aoe_radius = $aoe_radius;
        else
        echo "Zły typ danych";
    }
    function set_element($element) {
        if(is_string($element))
        $this->element = $element;
        else
        echo "Zły typ danych";
    }
    function charge(){
        echo "Wykonuje naładowanie zaklęcia.";
    }
}
?>