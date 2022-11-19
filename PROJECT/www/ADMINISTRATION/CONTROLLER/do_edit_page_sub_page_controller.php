<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class DO_EDIT_PAGE_SUB_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_sub_page_id
        )
    {
        parent::__construct( $language_code );

         $page_id = GetPostValue( 'PageId' );
         $sub_page_id = GetPostValue( 'SubPageId' );
         $number = GetPostValue( 'Number' );

        SetDatabasePageSubPage( $page_sub_page_id, $page_id, $sub_page_id, $number );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page-sub-page' ) );
    }
}

// -- STATEMENTS

 $do_edit_page_sub_page_controller = new DO_EDIT_PAGE_SUB_PAGE_CONTROLLER(  $language_code,  $page_sub_page_id );
