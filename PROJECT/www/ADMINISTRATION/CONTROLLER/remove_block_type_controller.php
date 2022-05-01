<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class REMOVE_BLOCK_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_type_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a block type';
        $this->BlockType = GetDatabaseBlockTypeById( $block_type_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/block-type' );

        require_once __DIR__ . '/' . '../VIEW/remove_block_type_view.php';
    }
}

// -- STATEMENTS

 $remove_block_type_controller = new REMOVE_BLOCK_TYPE_CONTROLLER(  $language_code,  $block_type_id );
