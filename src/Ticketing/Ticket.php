<?php

namespace App\Ticketing;

use EntityTranspiler\Annotations as ET;

use App\Traits\Created;

/** @ET\Entity */
class Ticket {

    use Created;

    /** @ET\Property(type="int") */
    private $id;

    /** @ET\Property(type=TicketStatus::class) */
    private $status;

    /** @ET\Property(type=@ET\Collection(Response::class)) */
    private $responses;

}
