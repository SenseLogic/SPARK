<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class DO_REMOVE_TEXT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseTextById( $text_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text' ) );
    }
}

// -- STATEMENTS

 $do_remove_text_controller = new DO_REMOVE_TEXT_CONTROLLER(  $language_code,  $text_id );
