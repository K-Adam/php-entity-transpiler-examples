<?php

namespace App\Shop\Cart;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class Entry {

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type=App\Shop\Cart::class, optional=true) */
    private $cart;

    /** @ET\Property(type="int") */
    private $count;

    public function getId(){
        return $this->id;
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
