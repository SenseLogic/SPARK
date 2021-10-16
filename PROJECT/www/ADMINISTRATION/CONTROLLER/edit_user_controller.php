<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class EDIT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $user_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a user';
        $this->User = GetDatabaseUserById( $user_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/user' );

        require_once __DIR__ . '/' . '../VIEW/edit_user_view.php';
    }
}

// -- STATEMENTS

 $edit_user_controller = new EDIT_USER_CONTROLLER(  $user_id );
