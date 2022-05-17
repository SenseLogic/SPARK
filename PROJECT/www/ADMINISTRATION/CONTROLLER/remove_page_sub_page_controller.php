<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class REMOVE_PAGE_SUB_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_sub_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a page sub page';
        $this->PageSubPage = GetDatabasePageSubPageById( $page_sub_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-sub-page' );

        require_once __DIR__ . '/' . '../VIEW/remove_page_sub_page_view.php';
    }
}

// -- STATEMENTS

 $remove_page_sub_page_controller = new REMOVE_PAGE_SUB_PAGE_CONTROLLER(  $language_code,  $page_sub_page_id );
