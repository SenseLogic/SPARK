<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class ADD_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a page content block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-content-block' );

        require_once __DIR__ . '/' . '../VIEW/add_page_content_block_view.php';
    }
}

// -- STATEMENTS

 $add_page_content_block_controller = new ADD_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code );
