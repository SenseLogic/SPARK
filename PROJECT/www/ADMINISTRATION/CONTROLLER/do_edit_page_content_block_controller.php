<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class DO_EDIT_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_content_block_id
        )
    {
        parent::__construct( $language_code );

         $page_slug = GetPostValue( 'PageSlug' );
         $block_slug = GetPostValue( 'BlockSlug' );
         $number = GetPostValue( 'Number' );

        SetDatabasePageContentBlock( $page_content_block_id, $page_slug, $block_slug, $number );

        Redirect( FindSessionValue( 'ListPage', '/admin/page-content-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_page_content_block_controller = new DO_EDIT_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $page_content_block_id );
