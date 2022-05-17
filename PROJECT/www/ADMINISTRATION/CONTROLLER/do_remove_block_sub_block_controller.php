<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_sub_block_model.php';

// -- TYPES

class DO_REMOVE_BLOCK_SUB_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_sub_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseBlockSubBlockById( $block_sub_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block-sub-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_block_sub_block_controller = new DO_REMOVE_BLOCK_SUB_BLOCK_CONTROLLER(  $language_code,  $block_sub_block_id );
