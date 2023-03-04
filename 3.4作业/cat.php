<?php
class cat{
    var $color;
    var $nature;
    public function setColor($color){
        $this->color = $color;
    }
    public function  getColor(){
        echo $this->color . PHP_EOL;
    }
    public function setNature($nature){
        $this->nature = $nature;
    }
    public function getNature(){
        echo $this->nature . PHP_EOL;
    }
}
$mi = new cat();
$mi->setColor("black");
$mi->getColor();

$mi->setNature("miao~miao~");
$mi->getNature();