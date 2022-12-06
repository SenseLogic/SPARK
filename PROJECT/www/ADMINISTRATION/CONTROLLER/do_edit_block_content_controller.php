<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class DO_EDIT_BLOCK_CONTENT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_content_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );

        SetDatabaseBlockContent( $block_content_id, $slug, $name );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-content' ) );
    }
}

// -- STATEMENTS

 $do_edit_block_content_controller = new DO_EDIT_BLOCK_CONTENT_CONTROLLER(  $language_code,  $block_content_id );
