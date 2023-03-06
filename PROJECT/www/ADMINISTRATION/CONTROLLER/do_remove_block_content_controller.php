<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class DO_REMOVE_BLOCK_CONTENT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_content_id
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'author' ) )
        {
            RemoveDatabaseBlockContentById( $block_content_id );

            Redirect( FindSessionValue( 'ListRoute', '/admin/block-content' ) );
        }
    }
}

// -- STATEMENTS

 $do_remove_block_content_controller = new DO_REMOVE_BLOCK_CONTENT_CONTROLLER(  $language_code,  $block_content_id );
