<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_sub_block_model.php';

// -- TYPES

class ADD_BLOCK_SUB_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a block sub block';
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/block-sub-block' );

        require_once __DIR__ . '/' . '../VIEW/add_block_sub_block_view.php';
    }
}

// -- STATEMENTS

 $add_block_sub_block_controller = new ADD_BLOCK_SUB_BLOCK_CONTROLLER(  $language_code );
