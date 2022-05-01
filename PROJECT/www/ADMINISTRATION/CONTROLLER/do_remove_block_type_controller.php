<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class DO_REMOVE_BLOCK_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_type_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseBlockTypeById( $block_type_id );

        Redirect( FindSessionValue( 'ListPage', '/admin/block-type' ) );
    }
}

// -- STATEMENTS

 $do_remove_block_type_controller = new DO_REMOVE_BLOCK_TYPE_CONTROLLER(  $language_code,  $block_type_id );
