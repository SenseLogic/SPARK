<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class DO_REMOVE_LANGUAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $language_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseLanguageById( $language_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/language' ) );
    }
}

// -- STATEMENTS

 $do_remove_language_controller = new DO_REMOVE_LANGUAGE_CONTROLLER(  $language_code,  $language_id );
