<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class ADD_TEXT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a text block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text-block' );

        require_once __DIR__ . '/' . '../VIEW/add_text_block_view.php';
    }
}

// -- STATEMENTS

 $add_text_block_controller = new ADD_TEXT_BLOCK_CONTROLLER(  $language_code );
