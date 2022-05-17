<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class EDIT_PAGE_SUB_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_sub_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a page sub page';
        $this->PageSubPage = GetDatabasePageSubPageById( $page_sub_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-sub-page' );

        require_once __DIR__ . '/' . '../VIEW/edit_page_sub_page_view.php';
    }
}

// -- STATEMENTS

 $edit_page_sub_page_controller = new EDIT_PAGE_SUB_PAGE_CONTROLLER(  $language_code,  $page_sub_page_id );
