<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class DO_REMOVE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $content_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseContentBlockById( $content_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/content-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_content_block_controller = new DO_REMOVE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $content_block_id );
