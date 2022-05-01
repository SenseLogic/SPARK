<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class REMOVE_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_content_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a page content block';
        $this->PageContentBlock = GetDatabasePageContentBlockById( $page_content_block_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/page-content-block' );

        require_once __DIR__ . '/' . '../VIEW/remove_page_content_block_view.php';
    }
}

// -- STATEMENTS

 $remove_page_content_block_controller = new REMOVE_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $page_content_block_id );
