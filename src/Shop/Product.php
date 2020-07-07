<?php

namespace App\Shop;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class Product {

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type="string") */
    private $title;

    /** @ET\Property(type="string") */
    private $description;

    /** @ET\Property(type="int") */
    private $price;
	
    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }
	
}