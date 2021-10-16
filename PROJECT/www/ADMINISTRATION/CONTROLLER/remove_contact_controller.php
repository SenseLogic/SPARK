<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class REMOVE_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $contact_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a contact';
        $this->Contact = GetDatabaseContactById( $contact_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/contact' );

        require_once __DIR__ . '/' . '../VIEW/remove_contact_view.php';
    }
}

// -- STATEMENTS

 $remove_contact_controller = new REMOVE_CONTACT_CONTROLLER(  $contact_id );
