<?php
require_once("Magic.php");
class FireStaff extends Magic{
    private string $fireStaffSkill1;
    private string $fireStaffSkill2;

    function __construct($type, $name, $dps, $aoe_radius, $element, $fireStaffSkill1, $fireStaffSkill2){
        parent::__construct($type, $name, $dps, $aoe_radius, $element);
        $this->fireStaffSkill1 = $fireStaffSkill1;
        $this->fireStaffSkill2 = $fireStaffSkill2;
    }
    function get_fireStaffSkill1(){
        return $this->fireStaffSkill1;
    }
    function get_fireStaffSkill2(){
        return $this->fireStaffSkill2;
    }
    function set_fireStaffSkill1($fireStaffSkill1) {
        if(is_string($fireStaffSkill1))
        $this->fireStaffSkill1 = $fireStaffSkill1;
        else
        echo "Zły typ danych";
    }
    function set_fireStaffSkill2($fireStaffSkill2) {
        if(is_string($fireStaffSkill2))
        $this->fireStaffSkill2 = $fireStaffSkill2;
        else
        echo "Zły typ danych";
    }
    function fireStaffSkill1(){
        echo "Wykonuje umiejętność".$this->fireStaffSkill1.".";
    }
}
?>