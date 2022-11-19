<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/image_block_model.php';

// -- TYPES

class REMOVE_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $image_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a image block';
        $this->ImageBlock = GetDatabaseImageBlockById( $image_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/image-block' );

        require_once __DIR__ . '/' . '../VIEW/remove_image_block_view.php';
    }
}

// -- STATEMENTS

 $remove_image_block_controller = new REMOVE_IMAGE_BLOCK_CONTROLLER(  $language_code,  $image_block_id );
