<?php

class Product{
    private $name;
    private $price;
    private $quality;
    private $categoryId;

    public function __construct($name, $price, $quality, $categoryId){
        $this->name = $name;
        $this->price = $price;
        $this->quality = $quality;
        $this->categoryId = $categoryId;
    }
    public function getName(){
        return $this->name;
    }
};

$product = array(
    "0" => new Product("CPU",750,10,1),
    "1" => new Product("RAM",50,2,2),
    "2" => new Product("HDD",70,1,2),
    "3" => new Product("Main",400,3,1),
    "4" => new Product("Keyboadrd",40,8,4),
    "5" => new Product("Mouse",25,50,4),
    "6" => new Product("VGA",60,3,3),
    "7" => new Product("Monitor",120,28,2),
    "8" => new Product("Case",120,28,5),
);

//Tìm kiếm theo tên
function findProduct($listProduct, $nameProduct){
    for ($i = 0; $i < count($listProduct); $i++){
        if($listProduct[$i]->getName() == $nameProduct){
            return $listProduct[$i];
        }
    };
};