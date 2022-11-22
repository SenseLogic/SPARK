<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class ADD_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block' );

        require_once __DIR__ . '/' . '../VIEW/add_block_view.php';
    }
}

// -- STATEMENTS

 $add_block_controller = new ADD_BLOCK_CONTROLLER(  $language_code );
