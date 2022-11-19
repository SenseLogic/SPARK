<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_page_model.php';

// -- TYPES

class ADD_CONTACT_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a contact page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/contact-page' );

        require_once __DIR__ . '/' . '../VIEW/add_contact_page_view.php';
    }
}

// -- STATEMENTS

 $add_contact_page_controller = new ADD_CONTACT_PAGE_CONTROLLER(  $language_code );
