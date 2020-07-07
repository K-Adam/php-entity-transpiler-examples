<?php

namespace App\Ticketing\Response;

use App\Ticketing\Response;
use App\Ticketing\TicketStatus;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity */
class StatusChange extends Response {

    /** @ET\Property(type=TicketStatus::class) */
    private $newStatus;

    public function getNewStatus(){
        return $this->newStatus;
    }

    public function setNewStatus($newStatus){
        $this->newStatus = $newStatus;
    }

}
