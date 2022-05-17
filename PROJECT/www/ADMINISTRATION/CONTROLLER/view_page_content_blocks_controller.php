<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class VIEW_PAGE_CONTENT_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View page content blocks';
        $this->PageContentBlockArray = GetDatabasePageContentBlockArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_page_content_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_page_content_blocks_controller = new VIEW_PAGE_CONTENT_BLOCKS_CONTROLLER(  $language_code );
