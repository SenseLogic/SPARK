<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class REMOVE_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $user_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a user';
        $this->User = GetDatabaseUserById( $user_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/user' );

        require_once __DIR__ . '/' . '../VIEW/remove_user_view.php';
    }
}

// -- STATEMENTS

 $remove_user_controller = new REMOVE_USER_CONTROLLER(  $language_code,  $user_id );
