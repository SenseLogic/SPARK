<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class DO_ADD_BLOCK_CONTENT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );

        AddDatabaseBlockContent( $id, $slug, $name );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-content' ) );
    }
}

// -- STATEMENTS

 $do_add_block_content_controller = new DO_ADD_BLOCK_CONTENT_CONTROLLER(  $language_code );
