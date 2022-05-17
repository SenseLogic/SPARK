<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class DO_EDIT_BLOCK_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_type_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );

        SetDatabaseBlockType( $block_type_id, $slug, $name );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-type' ) );
    }
}

// -- STATEMENTS

 $do_edit_block_type_controller = new DO_EDIT_BLOCK_TYPE_CONTROLLER(  $language_code,  $block_type_id );
