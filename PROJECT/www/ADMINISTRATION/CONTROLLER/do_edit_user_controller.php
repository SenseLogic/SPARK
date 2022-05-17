<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_EDIT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $user_id
        )
    {
        parent::__construct( $language_code );

         $email = GetPostValue( 'Email' );
         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $role = GetPostValue( 'Role' );

        SetDatabaseUser( $user_id, $email, $pseudonym, $password, $role );

        Redirect( FindSessionValue( 'ListRoute', '/admin/user' ) );
    }
}

// -- STATEMENTS

 $do_edit_user_controller = new DO_EDIT_USER_CONTROLLER(  $language_code,  $user_id );
