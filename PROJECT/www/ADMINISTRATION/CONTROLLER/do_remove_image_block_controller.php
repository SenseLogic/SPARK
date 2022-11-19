<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/image_block_model.php';

// -- TYPES

class DO_REMOVE_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $image_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseImageBlockById( $image_block_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/image-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_image_block_controller = new DO_REMOVE_IMAGE_BLOCK_CONTROLLER(  $language_code,  $image_block_id );
