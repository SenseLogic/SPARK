<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class VIEW_PAGE_TYPES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View page types';
        $this->PageTypeArray = GetDatabasePageTypeArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_page_types_view.php';
    }
}

// -- STATEMENTS

 $view_page_types_controller = new VIEW_PAGE_TYPES_CONTROLLER(  $language_code );
