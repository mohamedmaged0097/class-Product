<?php 

require_once 'Product';

class BabyCar extends Product {
    public $age , $weight ;
    private $materials =["cotton","silicon","rubber","plastic","wool","fur","leather","steel","aluminium","glass","wood","metal","cloth","leather"];
    private $specialTax = 0.014;

    public function displayMaterials(){
        foreach($this->materials as $mat){
            echo "$mat" . "<br>";
        }
    }
    public function getFinalPrice(){
        $this->price = $this->price * (1 + $this->specialTax);
    }
}