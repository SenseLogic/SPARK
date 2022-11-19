<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_page_model.php';

// -- TYPES

class VIEW_CONTACT_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View contact pages';
        $this->ContactPageArray = GetDatabaseContactPageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_contact_pages_view.php';
    }
}

// -- STATEMENTS

 $view_contact_pages_controller = new VIEW_CONTACT_PAGES_CONTROLLER(  $language_code );
