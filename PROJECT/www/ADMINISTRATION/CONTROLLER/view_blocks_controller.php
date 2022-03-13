<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class VIEW_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View blocks';
        $this->BlockArray = GetDatabaseBlockArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_blocks_controller = new VIEW_BLOCKS_CONTROLLER(  $language_code );
