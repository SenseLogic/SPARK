<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class ADD_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a contact';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/contact' );

        require_once __DIR__ . '/' . '../VIEW/add_contact_view.php';
    }
}

// -- STATEMENTS

 $add_contact_controller = new ADD_CONTACT_CONTROLLER(  $language_code );
