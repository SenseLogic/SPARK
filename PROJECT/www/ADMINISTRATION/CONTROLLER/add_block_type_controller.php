<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class ADD_BLOCK_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a block type';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block-type' );

        require_once __DIR__ . '/' . '../VIEW/add_block_type_view.php';
    }
}

// -- STATEMENTS

 $add_block_type_controller = new ADD_BLOCK_TYPE_CONTROLLER(  $language_code );
