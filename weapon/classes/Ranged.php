<?php
require_once("Weapon.php");
class Ranged extends Weapon{
    private string $ammunition_type;
    private string $ammunition_material;

    function __construct($type, $name, $dps, $ammunition_type, $ammunition_material){
        parent::__construct($type, $name, $dps);
        $this->ammunition_type = $ammunition_type;
        $this->ammunition_material = $ammunition_material;
    }
    function get_ammunition_type(){
        return $this->ammunition_type;
    }
    function get_ammunition_material(){
        return $this->ammunition_material;
    }
    function set_ammunition_type($ammunition_type) {
        if(is_string($ammunition_type))
        $this->ammunition_type = $ammunition_type;
        else
        echo "Zły typ danych";
    }
    function set_ammunition_material($ammunition_material) {
        if(is_string($ammunition_material))
        $this->ammunition_material = $ammunition_material;
        else
        echo "Zły typ danych";
    }
    function aim(){
        echo "Wykonuje przycelowanie bronią.";
    }
}
?>