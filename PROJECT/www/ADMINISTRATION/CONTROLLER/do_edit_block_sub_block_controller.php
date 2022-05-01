<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_sub_block_model.php';

// -- TYPES

class DO_EDIT_BLOCK_SUB_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_sub_block_id
        )
    {
        parent::__construct( $language_code );

         $block_slug = GetPostValue( 'BlockSlug' );
         $sub_block_slug = GetPostValue( 'SubBlockSlug' );
         $number = GetPostValue( 'Number' );

        SetDatabaseBlockSubBlock( $block_sub_block_id, $block_slug, $sub_block_slug, $number );

        Redirect( FindSessionValue( 'ListPage', '/admin/block-sub-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_block_sub_block_controller = new DO_EDIT_BLOCK_SUB_BLOCK_CONTROLLER(  $language_code,  $block_sub_block_id );
