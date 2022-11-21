<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_ADD_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $role = GetPostValue( 'Role' );
         $email = GetPostValue( 'Email' );

        AddDatabaseUser( $id, $pseudonym, $password, $role, $email );

        Redirect( FindSessionValue( 'ListRoute', '/admin/user' ) );
    }
}

// -- STATEMENTS

 $do_add_user_controller = new DO_ADD_USER_CONTROLLER(  $language_code );
