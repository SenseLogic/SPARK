<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class DO_ADD_LANGUAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $code = GetPostValue( 'Code' );
         $number = GetPostValue( 'Number' );
         $text = GetPostValue( 'Text' );

        AddDatabaseLanguage( $id, $code, $number, $text );

        Redirect( FindSessionValue( 'ListRoute', '/admin/language' ) );
    }
}

// -- STATEMENTS

 $do_add_language_controller = new DO_ADD_LANGUAGE_CONTROLLER(  $language_code );
