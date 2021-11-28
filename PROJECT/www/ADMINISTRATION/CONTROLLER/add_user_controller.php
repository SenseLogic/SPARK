<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class ADD_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a user';
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/user' );

        require_once __DIR__ . '/' . '../VIEW/add_user_view.php';
    }
}

// -- STATEMENTS

 $add_user_controller = new ADD_USER_CONTROLLER(  $language_code );
