<?php

namespace Depot\AggregateRoot\Support\Change;

interface Writing
{
    /**
     * @return static
     */
    public static function instantiateChangeFromEventAndMetadata();
}
