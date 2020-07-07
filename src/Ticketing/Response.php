<?php

namespace App\Ticketing;

use EntityTranspiler\Annotations as ET;

use App\Traits\Created;

/** @ET\Entity */
abstract class Response {

    use Created;

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type=Ticket::class, optional=true) */
    private $ticket;

    public function getId(){
        return $this->id;
    }

    public function getTicket(){
        return $this->ticket;
    }

    public function setTicket($ticket){
        $this->ticket = $ticket;
    }

}
