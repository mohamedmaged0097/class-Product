<?php 


class Product {

    public $name , $price , $description , $image , $tmp_name , $new_name ;
    public function __construct(array $image){
        $this->name = $image['name'];
        $this->tmp_name = $image['tmp_name'];
        $ext = pathinfo($this->name, PATHINFO_EXTENSION);
        $this->new_name = uniqid(). '.'. $ext;      

    }
    public function upload(){
        move_uploaded_file($this->tmp_name, 'uploads/'. $this->new_name);
    }

    public function clacPrice(){
        $this->price = $this->price * 1.1;

    }

}