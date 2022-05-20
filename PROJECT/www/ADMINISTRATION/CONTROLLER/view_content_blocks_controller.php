<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class VIEW_CONTENT_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View content blocks';
        $this->ContentBlockArray = GetDatabaseContentBlockArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_content_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_content_blocks_controller = new VIEW_CONTENT_BLOCKS_CONTROLLER(  $language_code );
