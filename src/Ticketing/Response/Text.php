<?php

namespace App\Ticketing\Response;

use App\Ticketing\Response;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class Text extends Response {

    /** @ET\Property(type="string") */
    private $text;

    public function getText(){
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }

}
