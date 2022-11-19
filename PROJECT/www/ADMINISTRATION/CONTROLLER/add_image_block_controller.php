<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/image_block_model.php';

// -- TYPES

class ADD_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a image block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/image-block' );

        require_once __DIR__ . '/' . '../VIEW/add_image_block_view.php';
    }
}

// -- STATEMENTS

 $add_image_block_controller = new ADD_IMAGE_BLOCK_CONTROLLER(  $language_code );
