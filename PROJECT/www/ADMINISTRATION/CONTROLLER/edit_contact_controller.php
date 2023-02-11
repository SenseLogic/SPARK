<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class EDIT_CONTACT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $contact_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a contact';
        $this->Contact = GetDatabaseContactById( $contact_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/contact' );

        require_once __DIR__ . '/' . '../VIEW/edit_contact_view.php';
    }
}

// -- STATEMENTS

 $edit_contact_controller = new EDIT_CONTACT_CONTROLLER(  $language_code,  $contact_id );
