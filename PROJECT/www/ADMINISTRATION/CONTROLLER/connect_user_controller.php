<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';

// -- TYPES

class CONNECT_USER_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = '';

        require_once __DIR__ . '/' . '../VIEW/connect_user_view.php';
    }
}

// -- STATEMENTS

 $connect_user_controller = new CONNECT_USER_CONTROLLER(  $language_code );
