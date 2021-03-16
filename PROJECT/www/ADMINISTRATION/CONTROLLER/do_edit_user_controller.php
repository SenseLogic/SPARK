<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_EDIT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        $user_id
        )
    {
        parent::__construct();

         $email = GetPostValue( 'Email' );
         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $role = GetPostValue( 'Role' );

        SetDatabaseUser( $user_id, $email, $pseudonym, $password, $role );

        Redirect( '/admin/user' );
    }
}

// -- STATEMENTS

 $do_edit_user_controller = new DO_EDIT_USER_CONTROLLER(  $user_id );
