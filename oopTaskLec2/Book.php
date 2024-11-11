<?php 

require_once 'Product.php';

class Book extends Product {
    private $publisher = [];
    public $wirter , $color , $supplier;
    public function choosePublisher($num){
        return $this->publisher[$num];
    }
    public function setPublisher($name){
        $this->publisher[] = "$name";
    }
    public function showAllPubisher(){
        foreach($this->publisher as $pub){
            echo "$pub";
        }   
    }
}