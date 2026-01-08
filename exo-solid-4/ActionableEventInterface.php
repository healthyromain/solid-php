<?php

require_once 'EventInterface.php';

interface ActionableEventInterface extends EventInterface
{
    /**
     * Returns the list of available actions for actionable events
     *
     * @return array
     */
    public function action() : array;
}
