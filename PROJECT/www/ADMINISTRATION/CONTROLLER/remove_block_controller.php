<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class REMOVE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a block';
        $this->Block = GetDatabaseBlockById( $block_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/block' );

        require_once __DIR__ . '/' . '../VIEW/remove_block_view.php';
    }
}

// -- STATEMENTS

 $remove_block_controller = new REMOVE_BLOCK_CONTROLLER(  $language_code,  $block_id );
