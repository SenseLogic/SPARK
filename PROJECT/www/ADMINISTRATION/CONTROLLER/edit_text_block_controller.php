<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class EDIT_TEXT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a text block';
        $this->TextBlock = GetDatabaseTextBlockById( $text_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text-block' );

        require_once __DIR__ . '/' . '../VIEW/edit_text_block_view.php';
    }
}

// -- STATEMENTS

 $edit_text_block_controller = new EDIT_TEXT_BLOCK_CONTROLLER(  $language_code,  $text_block_id );
