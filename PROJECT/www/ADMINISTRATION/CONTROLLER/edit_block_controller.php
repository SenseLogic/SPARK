<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class EDIT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a block';
        $this->Block = GetDatabaseBlockById( $block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block' );

        require_once __DIR__ . '/' . '../VIEW/edit_block_view.php';
    }
}

// -- STATEMENTS

 $edit_block_controller = new EDIT_BLOCK_CONTROLLER(  $language_code,  $block_id );
