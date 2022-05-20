<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class MANAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        int $content_block_id
        )
    {
        parent::__construct();

        $this->Title = 'Manage a content block';
        $this->ContentBlockArray = GetDatabaseContentBlockArray();
        $this->ContentBlockBySlugMap = GetValidContentBlockBySlugMap( $this->ContentBlockArray );
        $this->ContentBlock = GetValidContentBlockById( $this->ContentBlockBySlugMap, $content_block_id );
        $this->ListRoute = '/admin/content-block/manage/' . $content_block_id;

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/manage_content_block_view.php';
    }
}

// -- STATEMENTS

 $manage_content_block_controller = new MANAGE_CONTENT_BLOCK_CONTROLLER(  $content_block_id );
