<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_and_image_block_model.php';

// -- TYPES

class ADD_TEXT_AND_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a text and image block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text-and-image-block' );

        require_once __DIR__ . '/' . '../VIEW/add_text_and_image_block_view.php';
    }
}

// -- STATEMENTS

 $add_text_and_image_block_controller = new ADD_TEXT_AND_IMAGE_BLOCK_CONTROLLER(  $language_code );
