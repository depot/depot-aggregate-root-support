<?php

namespace Depot\AggregateRoot\Support\Change;

interface Reading
{
    /**
     * @return object
     */
    public function getAggregateEvent();

    /**
     * @return object
     */
    public function getAggregateMetadata();

    /**
     * @return bool
     */
    public function getCanReadAggregateEventId();

    /**
     * @return object
     */
    public function getAggregateEventId();

    /**
     * @return bool
     */
    public function getCanReadAggregateEventVersion();

    /**
     * @return object
     */
    public function getAggregateEventVersion();

    /**
     * @return object
     */
    public function getAggregateEventWhen();
}
