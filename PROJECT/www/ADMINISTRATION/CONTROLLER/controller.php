<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/session.php';

// -- TYPES

class CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        $this->Session = new SESSION();
    }
}
