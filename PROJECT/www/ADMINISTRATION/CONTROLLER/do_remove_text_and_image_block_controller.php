<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_and_image_block_model.php';

// -- TYPES

class DO_REMOVE_TEXT_AND_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_and_image_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseTextAndImageBlockById( $text_and_image_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text-and-image-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_text_and_image_block_controller = new DO_REMOVE_TEXT_AND_IMAGE_BLOCK_CONTROLLER(  $language_code,  $text_and_image_block_id );
