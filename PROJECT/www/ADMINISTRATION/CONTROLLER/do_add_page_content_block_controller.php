<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_content_block_model.php';

// -- TYPES

class DO_ADD_PAGE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $page_slug = GetPostValue( 'PageSlug' );
         $block_slug = GetPostValue( 'BlockSlug' );
         $number = GetPostValue( 'Number' );

        AddDatabasePageContentBlock( $page_slug, $block_slug, $number );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page-content-block' ) );
    }
}

// -- STATEMENTS

 $do_add_page_content_block_controller = new DO_ADD_PAGE_CONTENT_BLOCK_CONTROLLER(  $language_code );
