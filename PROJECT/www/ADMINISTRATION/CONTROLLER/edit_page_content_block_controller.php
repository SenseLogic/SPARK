<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class EDIT_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_content_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a page content block';
        $this->PageContentBlock = GetDatabasePageContentBlockById( $page_content_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-content-block' );

        require_once __DIR__ . '/' . '../VIEW/edit_page_content_block_view.php';
    }
}

// -- STATEMENTS

 $edit_page_content_block_controller = new EDIT_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $page_content_block_id );
