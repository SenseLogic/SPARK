<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class DO_REMOVE_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_content_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabasePageContentBlockById( $page_content_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page-content-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_page_content_block_controller = new DO_REMOVE_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $page_content_block_id );
