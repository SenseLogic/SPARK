<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class MANAGE_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Manage content blocks';
        $this->BlockArray = GetDatabaseBlockArray();
        $this->BlockBySlugMap = GetValidBlockBySlugMap( $this->BlockArray );
        $this->ListRoute = '/admin/block/manage';

        SetSessionValue( 'ListRoute', $this->ListRoute );

        require_once __DIR__ . '/' . '../VIEW/manage_blocks_view.php';
    }
}

// -- STATEMENTS

 $manage_blocks_controller = new MANAGE_BLOCKS_CONTROLLER();
