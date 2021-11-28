<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class VIEW_TEXTS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View texts';
        $this->TextArray = GetDatabaseTextArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_texts_view.php';
    }
}

// -- STATEMENTS

 $view_texts_controller = new VIEW_TEXTS_CONTROLLER(  $language_code );
