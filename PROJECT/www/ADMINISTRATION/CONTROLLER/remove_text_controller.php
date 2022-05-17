<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class REMOVE_TEXT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a text';
        $this->Text = GetDatabaseTextById( $text_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text' );

        require_once __DIR__ . '/' . '../VIEW/remove_text_view.php';
    }
}

// -- STATEMENTS

 $remove_text_controller = new REMOVE_TEXT_CONTROLLER(  $language_code,  $text_id );
