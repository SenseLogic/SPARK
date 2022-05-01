<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class ADD_PAGE_SUB_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a page sub page';
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/page-sub-page' );

        require_once __DIR__ . '/' . '../VIEW/add_page_sub_page_view.php';
    }
}

// -- STATEMENTS

 $add_page_sub_page_controller = new ADD_PAGE_SUB_PAGE_CONTROLLER(  $language_code );
