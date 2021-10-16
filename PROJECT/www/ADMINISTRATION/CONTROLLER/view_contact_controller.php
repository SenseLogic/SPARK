<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class VIEW_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $contact_id
        )
    {
        parent::__construct();

        $this->Title = 'View a contact';
        $this->Contact = GetDatabaseContactById( $contact_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/contact' );

        require_once __DIR__ . '/' . '../VIEW/view_contact_view.php';
    }
}

// -- STATEMENTS

 $view_contact_controller = new VIEW_CONTACT_CONTROLLER(  $contact_id );
