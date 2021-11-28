<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- STATEMENTS

class SHOW_ERROR_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        require_once __DIR__ . '/' . '../VIEW/show_error_view.php';
    }
}

// -- STATEMENTS

 $show_error_controller = new SHOW_ERROR_CONTROLLER(  $language_code );
