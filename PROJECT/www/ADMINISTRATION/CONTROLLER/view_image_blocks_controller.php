<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/image_block_model.php';

// -- TYPES

class VIEW_IMAGE_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View image blocks';
        $this->ImageBlockArray = GetDatabaseImageBlockArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_image_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_image_blocks_controller = new VIEW_IMAGE_BLOCKS_CONTROLLER(  $language_code );
