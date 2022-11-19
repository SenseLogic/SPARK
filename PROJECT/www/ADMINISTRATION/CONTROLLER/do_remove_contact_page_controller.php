<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_page_model.php';

// -- TYPES

class DO_REMOVE_CONTACT_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $contact_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseContactPageById( $contact_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/contact-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_contact_page_controller = new DO_REMOVE_CONTACT_PAGE_CONTROLLER(  $language_code,  $contact_page_id );
