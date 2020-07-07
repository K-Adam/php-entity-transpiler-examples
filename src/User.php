<?php

namespace App;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class User {

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type="string") */
    private $name;

    /** @ET\Property(type="string") */
    private $email;

    private $passwordHash;

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPasswordHash(){
        return $this->passwordHash;
    }

    public function setPasswordHash($passwordHash){
        $this->passwordHash = $passwordHash;
    }

}
