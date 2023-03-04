<?php
$R = $_GET['R'];
class circle{
    var $R;
    public static $pi=3.14;
    public function getS($R){
        $this->R = $R;
        $S = self::$pi*$R*$R;
        echo "S:$S";
    }
}
$roll1 = new circle();
$roll1 -> getS($R);