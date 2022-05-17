<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_sub_block_model.php';

// -- TYPES

class DO_ADD_BLOCK_SUB_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $block_slug = GetPostValue( 'BlockSlug' );
         $sub_block_slug = GetPostValue( 'SubBlockSlug' );
         $number = GetPostValue( 'Number' );

        AddDatabaseBlockSubBlock( $block_slug, $sub_block_slug, $number );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-sub-block' ) );
    }
}

// -- STATEMENTS

 $do_add_block_sub_block_controller = new DO_ADD_BLOCK_SUB_BLOCK_CONTROLLER(  $language_code );
