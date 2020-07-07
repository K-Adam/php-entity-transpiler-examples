<?php

namespace App\Traits;

use EntityTranspiler\Annotations as ET;

trait Created {

    /** @ET\Property(type=App\User::class) */
    private $createdBy;

    /**
     * Use DateTime::class if you would like to have a Date object
     * @ET\Property(type="string")
     */
    private $createdAt;

    public function getCreatedBy(){
        return $this->createdBy;
    }

    public function setCreatedBy($createdBy){
        $this->createdBy = $createdBy;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt){
        $this->createdAt = $createdAt;
    }

}
