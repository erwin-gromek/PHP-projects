<?php
require_once("Weapon.php");
class Melee extends Weapon{
    private float $blade_length;
    private int $hands_required;

    function __construct($type, $name, $dps, $blade_length, $hands_required){
        parent::__construct($type, $name, $dps);
        $this->blade_length = $blade_length;
        $this->hands_required = $hands_required;
    }
    function get_blade_length(){
        return $this->blade_length;
    }
    function get_hands_required(){
        return $this->hands_required;
    }
    function set_blade_length($blade_length) {
        if(is_numeric($blade_length))
        $this->blade_length = $blade_length;
        else
        echo "Zły typ danych";
    }
    function set_hands_required($hands_required) {
        if(is_int($hands_required))
        $this->hands_required = $hands_required;
        else
        echo "Zły typ danych";
    }
    function block(){
        echo "Wykonuje blok bronią.";
    }
}
?>