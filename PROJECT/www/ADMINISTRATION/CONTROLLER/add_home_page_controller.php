<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/home_page_model.php';

// -- TYPES

class ADD_HOME_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a home page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/home-page' );

        require_once __DIR__ . '/' . '../VIEW/add_home_page_view.php';
    }
}

// -- STATEMENTS

 $add_home_page_controller = new ADD_HOME_PAGE_CONTROLLER(  $language_code );
