<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/home_page_model.php';

// -- TYPES

class VIEW_HOME_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $home_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View a home page';
        $this->HomePage = GetDatabaseHomePageById( $home_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/home-page' );

        require_once __DIR__ . '/' . '../VIEW/view_home_page_view.php';
    }
}

// -- STATEMENTS

 $view_home_page_controller = new VIEW_HOME_PAGE_CONTROLLER(  $language_code,  $home_page_id );
