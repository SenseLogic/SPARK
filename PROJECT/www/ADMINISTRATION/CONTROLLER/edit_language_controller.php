<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class EDIT_LANGUAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $language_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a language';
        $this->Language = GetDatabaseLanguageById( $language_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/language' );

        require_once __DIR__ . '/' . '../VIEW/edit_language_view.php';
    }
}

// -- STATEMENTS

 $edit_language_controller = new EDIT_LANGUAGE_CONTROLLER(  $language_code,  $language_id );
