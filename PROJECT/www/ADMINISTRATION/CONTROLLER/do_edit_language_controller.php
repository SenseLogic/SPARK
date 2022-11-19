<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class DO_EDIT_LANGUAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $language_id
        )
    {
        parent::__construct( $language_code );

         $code = GetPostValue( 'Code' );
         $number = GetPostValue( 'Number' );
         $text = GetPostValue( 'Text' );

        SetDatabaseLanguage( $language_id, $code, $number, $text );

        Redirect( FindSessionValue( 'ListRoute', '/admin/language' ) );
    }
}

// -- STATEMENTS

 $do_edit_language_controller = new DO_EDIT_LANGUAGE_CONTROLLER(  $language_code,  $language_id );
