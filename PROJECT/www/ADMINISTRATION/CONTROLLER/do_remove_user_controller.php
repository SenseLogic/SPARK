<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_REMOVE_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $user_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseUserById( $user_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/user' ) );
    }
}

// -- STATEMENTS

 $do_remove_user_controller = new DO_REMOVE_USER_CONTROLLER(  $language_code,  $user_id );
