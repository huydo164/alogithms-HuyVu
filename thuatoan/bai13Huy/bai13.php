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
    public function getId(){
        return $this->categoryId;
    }
};

class Category{
    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;
    }
}

$product = array(
    "0" => new Product("CPU",750,10,1),
    "1" => new Product("RAM",50,2,2),
    "2" => new Product("HDD",70,1,2),
    "3" => new Product("Main",400,3,1),
    "4" => new Product("Keyboard",40,8,4),
    "5" => new Product("Mouse",25,50,4),
    "6" => new Product("VGA",60,3,3),
    "7" => new Product("Monitor",120,28,2),
    "8" => new Product("Case",120,28,5),
);

$category = array(
    '0' => new Category(1,"Comuter"),
    '1' => new Category(2, "Memory"),
    '2' => new Category(3, "Card"),
    '3' => new Category(4, "Acsesory"),
);


function sortByCategoryName($listProduct,$listCategory)  { 
    $arr = array();
    for($i = 0; $i < count($listCategory); $i++){
        for($j = 0; $j < count($listCategory); $j++){
            if(strcmp($listCategory[$i]->getName(), $listCategory[$j]->getName()) < 0){
                $tmp = $listCategory[$i];
                $listCategory[$i] = $listCategory[$j];
                $listCategory[$j] = $tmp;
            }
        }
    }
    for($j= 0 ; $j < count($listCategory) ; $j++)
        for($i = 0 ; $i<count($listProduct)  -1  ; $i++)       
        {
            if($listProduct[$i]->getId() == $listCategory[$j]->getId())
            {
                $arr[] = $listProduct[$i];
            }
        }
    return $arr;
}
var_dump(sortByCategoryName($product, $category));