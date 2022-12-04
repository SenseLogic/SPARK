<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class DO_ADD_BLOCK_CATEGORY_CONTROLLER extends CONTROLLER
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

        AddDatabaseBlockCategory( $id, $slug, $name );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-category' ) );
    }
}

// -- STATEMENTS

 $do_add_block_category_controller = new DO_ADD_BLOCK_CATEGORY_CONTROLLER(  $language_code );