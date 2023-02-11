<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class VIEW_CONTACTS_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View contacts';
        $this->ContactArray = GetDatabaseContactArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_contacts_view.php';
    }
}

// -- STATEMENTS

 $view_contacts_controller = new VIEW_CONTACTS_CONTROLLER(  $language_code );
