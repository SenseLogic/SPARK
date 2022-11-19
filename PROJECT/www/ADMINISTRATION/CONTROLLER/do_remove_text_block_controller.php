<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class DO_REMOVE_TEXT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseTextBlockById( $text_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_text_block_controller = new DO_REMOVE_TEXT_BLOCK_CONTROLLER(  $language_code,  $text_block_id );
