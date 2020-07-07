<?php

namespace App\Ticketing;

use EntityTranspiler\Annotations as ET;

/** @ET\Entity(type="ENUM") */
abstract class TicketStatus {

    const OPEN = "OPEN";
    const CLOSED = "CLOSED";

}
