<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_CONNECT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $path
        )
    {
        parent::__construct();

         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $user = GetDatabaseUserByPseudonymAndPassword( $pseudonym, $password );

        if ( $user === null )
        {
            $this->Title = 'LOG IN';

            require_once __DIR__ . '/' . '../VIEW/connect_user_view.php';
        }
        else
        {
            $this->Session->UserIsConnected = true;
            $this->Session->UserRole = $user->Role;
            $this->Session->Store();

            Redirect( $path );
        }
    }
}

// -- STATEMENTS

 $do_connect_user_controller = new DO_CONNECT_USER_CONTROLLER(  $path );
