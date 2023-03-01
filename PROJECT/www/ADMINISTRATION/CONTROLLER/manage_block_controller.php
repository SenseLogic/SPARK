<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class MANAGE_BLOCK_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $block_id
        )
    {
        parent::__construct();

        $this->Title = 'Manage a block';
        $this->Block = GetValidBlockById( $this->BlockByIdMap, $block_id );
        $this->ListRoute = '/admin/block/manage/' . $block_id;

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/manage_block_view.php';
    }
}

// -- STATEMENTS

 $manage_block_controller = new MANAGE_BLOCK_CONTROLLER(  $block_id );
