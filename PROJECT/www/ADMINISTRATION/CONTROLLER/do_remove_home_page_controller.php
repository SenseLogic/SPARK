<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/home_page_model.php';

// -- TYPES

class DO_REMOVE_HOME_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $home_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseHomePageById( $home_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/home-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_home_page_controller = new DO_REMOVE_HOME_PAGE_CONTROLLER(  $language_code,  $home_page_id );
