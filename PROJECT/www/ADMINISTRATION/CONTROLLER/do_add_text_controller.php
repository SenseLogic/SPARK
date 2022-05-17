<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class DO_ADD_TEXT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );

        AddDatabaseText( $slug, $text );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text' ) );
    }
}

// -- STATEMENTS

 $do_add_text_controller = new DO_ADD_TEXT_CONTROLLER(  $language_code );
