<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class VIEW_PAGE_SUB_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View page sub pages';
        $this->PageSubPageArray = GetDatabasePageSubPageArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_page_sub_pages_view.php';
    }
}

// -- STATEMENTS

 $view_page_sub_pages_controller = new VIEW_PAGE_SUB_PAGES_CONTROLLER(  $language_code );
