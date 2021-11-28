<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class DO_REMOVE_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $contact_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseContactById( $contact_id );

        Redirect( FindSessionValue( 'ListPage', '/admin/contact' ) );
    }
}

// -- STATEMENTS

 $do_remove_contact_controller = new DO_REMOVE_CONTACT_CONTROLLER(  $language_code,  $contact_id );
