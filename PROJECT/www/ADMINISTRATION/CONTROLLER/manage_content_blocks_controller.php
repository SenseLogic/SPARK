<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class MANAGE_CONTENT_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Manage content blocks';
        $this->ContentBlockArray = GetDatabaseContentBlockArray();
        $this->ContentBlockBySlugMap = GetValidContentBlockBySlugMap( $this->ContentBlockArray );
        $this->ListRoute = '/admin/content-block/manage';

        SetSessionValue( 'ListRoute', $this->ListRoute );

        require_once __DIR__ . '/' . '../VIEW/manage_content_blocks_view.php';
    }
}

// -- STATEMENTS

 $manage_content_blocks_controller = new MANAGE_CONTENT_BLOCKS_CONTROLLER();
