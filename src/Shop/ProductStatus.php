<?php

namespace App\Shop;

use EntityTranspiler\Annotations as ET;

// If the frontend uses different enum values than the server, you can override it like this:
/**
 *  @ET\Entity(type="ENUM")
 *  @ET\OverrideEnumValues({
 *    "UNAVAILABLE" = "UNAVAILABLE",
 *    "AVAILABLE" = "AVAILABLE",
 *    "OUT_OF_STOCK" = "OUT_OF_STOCK"
 *  })
 */
abstract class ProductStatus {
    const UNAVAILABLE = 0;
    const AVAILABLE = 1;
    const OUT_OF_STOCK = 3;
}
