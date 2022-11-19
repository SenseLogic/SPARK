<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class VIEW_LANGUAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $language_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View a language';
        $this->Language = GetDatabaseLanguageById( $language_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/language' );

        require_once __DIR__ . '/' . '../VIEW/view_language_view.php';
    }
}

// -- STATEMENTS

 $view_language_controller = new VIEW_LANGUAGE_CONTROLLER(  $language_code,  $language_id );
