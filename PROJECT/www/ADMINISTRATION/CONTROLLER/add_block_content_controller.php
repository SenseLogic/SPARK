<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class ADD_BLOCK_CONTENT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a block content';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block-content' );

        require_once __DIR__ . '/' . '../VIEW/add_block_content_view.php';
    }
}

// -- STATEMENTS

 $add_block_content_controller = new ADD_BLOCK_CONTENT_CONTROLLER(  $language_code );
