<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class EDIT_TEXT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a text';
        $this->Text = GetDatabaseTextById( $text_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text' );

        require_once __DIR__ . '/' . '../VIEW/edit_text_view.php';
    }
}

// -- STATEMENTS

 $edit_text_controller = new EDIT_TEXT_CONTROLLER(  $language_code,  $text_id );
