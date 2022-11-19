<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_and_image_block_model.php';

// -- TYPES

class VIEW_TEXT_AND_IMAGE_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View text and image blocks';
        $this->TextAndImageBlockArray = GetDatabaseTextAndImageBlockArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_text_and_image_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_text_and_image_blocks_controller = new VIEW_TEXT_AND_IMAGE_BLOCKS_CONTROLLER(  $language_code );
