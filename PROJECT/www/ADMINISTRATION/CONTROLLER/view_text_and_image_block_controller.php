<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_and_image_block_model.php';

// -- TYPES

class VIEW_TEXT_AND_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_and_image_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View a text and image block';
        $this->TextAndImageBlock = GetDatabaseTextAndImageBlockById( $text_and_image_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/text-and-image-block' );

        require_once __DIR__ . '/' . '../VIEW/view_text_and_image_block_view.php';
    }
}

// -- STATEMENTS

 $view_text_and_image_block_controller = new VIEW_TEXT_AND_IMAGE_BLOCK_CONTROLLER(  $language_code,  $text_and_image_block_id );
