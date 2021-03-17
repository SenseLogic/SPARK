<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class VIEW_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $user_id
        )
    {
        parent::__construct();

        $this->Title = 'View a user';
        $this->User = GetDatabaseUserById( $user_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_user_view.php';
    }
}

// -- STATEMENTS

 $view_user_controller = new VIEW_USER_CONTROLLER(  $user_id );
