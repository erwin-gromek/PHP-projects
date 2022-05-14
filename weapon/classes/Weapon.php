<?php
class Weapon{
    private string $type;
    private string $name;
    private float $dps;

    function __construct($type, $name, $dps){
        $this->type = $type;
        $this->name = $name;
        $this->dps = $dps;
    }
    function get_type(){
        return $this->type;
    }
    function get_name(){
        return $this->name;
    }
    function get_dps(){
        return $this->dps;
    }
    function set_type($type) {
        if(is_string($type))
        $this->type = $type;
        else
        echo "Zły typ danych";
    }
    function set_name($name) {
        if(is_string($name))
        $this->name = $name;
        else
        echo "Zły typ danych";
    }
    function set_dps($dps) {
        if(is_numeric($dps))
        $this->dps = $dps;
        else
        echo "Zły typ danych";
    }
    function attack(){
        echo "Wykonuje atak bronią.";
    }
    function __toString(){
        return "Obiekt Weapon został stworzony.";
    }
}
?>