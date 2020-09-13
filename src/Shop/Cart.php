<?php

namespace App\Shop;

use EntityTranspiler\Annotations as ET;

use App\Shop\Cart\Entry;

// Additional properties can be added using the extraProperties annotation
/** @ET\Entity(extraProperties={
 *   @ET\Property(name="productCounts",type="{[productId:int]:int}")
 *  })
 */
class Cart {

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type=App\User::class) */
    private $user;

    /** @ET\Property(type=@ET\Collection(Entry::class)) */
    private $entries;

    public function getId(){
        return $this->id;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getEntries(){
        return $this->entries;
    }

    public function setEntries($entries){
        $this->entries = $entries;
    }

}
