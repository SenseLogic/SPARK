<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_CONNECT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        string $path
        )
    {
        parent::__construct( $language_code );

         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $user = GetDatabaseUserByPseudonymAndPassword( $pseudonym, $password );

        if ( $user === null )
        {
            $this->Title = 'Sign In';

            require_once __DIR__ . '/' . '../VIEW/connect_user_view.php';
        }
        else
        {
            $this->Session->User = $user;
            $this->Session->UserIsConnected = true;
            $this->Session->UserRole = $user->Role;
            $this->Session->Store();

            Redirect( $path );
        }
    }
}

// -- STATEMENTS

 $do_connect_user_controller = new DO_CONNECT_USER_CONTROLLER(  $language_code,  $path );
