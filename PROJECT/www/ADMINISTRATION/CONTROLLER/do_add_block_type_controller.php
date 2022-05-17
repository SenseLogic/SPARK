<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class DO_ADD_BLOCK_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );

        AddDatabaseBlockType( $slug, $name );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-type' ) );
    }
}

// -- STATEMENTS

 $do_add_block_type_controller = new DO_ADD_BLOCK_TYPE_CONTROLLER(  $language_code );
