<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_page_model.php';

// -- TYPES

class EDIT_CONTACT_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $contact_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a contact page';
        $this->ContactPage = GetDatabaseContactPageById( $contact_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/contact-page' );

        require_once __DIR__ . '/' . '../VIEW/edit_contact_page_view.php';
    }
}

// -- STATEMENTS

 $edit_contact_page_controller = new EDIT_CONTACT_PAGE_CONTROLLER(  $language_code,  $contact_page_id );
