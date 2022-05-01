<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';

// -- TYPES

class VIEW_BLOCK_TYPES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View block types';
        $this->BlockTypeArray = GetDatabaseBlockTypeArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_block_types_view.php';
    }
}

// -- STATEMENTS

 $view_block_types_controller = new VIEW_BLOCK_TYPES_CONTROLLER(  $language_code );
