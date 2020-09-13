<?php

namespace App\Shop\Cart;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class Entry {

    /** @ET\Property(type="int", default=0) */
    private $id;

    /** @ET\Property(type=Product::class) */
    private $product;

    /** @ET\Property(type=App\Shop\Cart::class, optional=true) */
    private $cart;

    /** @ET\Property(type="int", default=0) */
    private $count;

    public function getId(){
        return $this->id;
    }

    public function getProduct(){
        return $this->product;
    }

    public function setProduct($product){
        $this->product = $product;
    }

    public function getCart(){
        return $this->cart;
    }

    public function setCart($cart){
        $this->cart = $cart;
    }

    public function getCount(){
        return $this->count;
    }

    public function setCount($count){
        $this->count = $count;
    }

}
