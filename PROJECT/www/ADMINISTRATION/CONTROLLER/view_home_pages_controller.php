<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/home_page_model.php';

// -- TYPES

class VIEW_HOME_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View home pages';
        $this->HomePageArray = GetDatabaseHomePageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_home_pages_view.php';
    }
}

// -- STATEMENTS

 $view_home_pages_controller = new VIEW_HOME_PAGES_CONTROLLER(  $language_code );
