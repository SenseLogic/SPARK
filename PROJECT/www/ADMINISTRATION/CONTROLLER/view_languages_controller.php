<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/language_model.php';

// -- TYPES

class VIEW_LANGUAGES_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View languages';
        $this->LanguageArray = GetDatabaseLanguageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_languages_view.php';
    }
}

// -- STATEMENTS

 $view_languages_controller = new VIEW_LANGUAGES_CONTROLLER(  $language_code );
