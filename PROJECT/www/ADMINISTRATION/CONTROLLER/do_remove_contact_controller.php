<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class DO_REMOVE_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $contact_id
        )
    {
        parent::__construct();

        RemoveDatabaseContactById( $contact_id );

        Redirect( '/admin/contact' );
    }
}

// -- STATEMENTS

 $do_remove_contact_controller = new DO_REMOVE_CONTACT_CONTROLLER(  $contact_id );
