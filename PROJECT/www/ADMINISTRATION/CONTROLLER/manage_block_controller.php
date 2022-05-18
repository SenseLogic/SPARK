<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';
require_once __DIR__ . '/' . '../../MODEL/block_sub_block_model.php';

// -- TYPES

class MANAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        int $block_id
        )
    {
        parent::__construct();

        $this->Title = 'Manage a block';
        $this->BlockArray = GetDatabaseBlockArray();
        $this->BlockSubBlockArray = GetDatabaseBlockSubBlockArray();
        $this->BlockBySlugMap = GetValidBlockBySlugMap( $this->BlockArray, $this->BlockSubBlockArray );
        $this->Block = GetValidBlockById( $this->BlockBySlugMap, $block_id );
        $this->ListRoute = '/admin/block/manage/' . $block_id;

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/manage_block_view.php';
    }
}

// -- STATEMENTS

 $manage_block_controller = new MANAGE_BLOCK_CONTROLLER(  $block_id );
