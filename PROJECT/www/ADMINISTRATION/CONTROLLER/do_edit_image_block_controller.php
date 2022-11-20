<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/image_block_model.php';

// -- TYPES

class DO_EDIT_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $image_block_id
        )
    {
        parent::__construct( $language_code );

         $page_id = GetPostValue( 'PageId' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $title = GetPostValue( 'Title' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $video_path = GetPostValue( 'VideoPath' );

        SetDatabaseImageBlock( $image_block_id, $page_id, $type_slug, $number, $language_code_array, $title, $image_path, $image_vertical_position, $image_horizontal_position, $video_path );

        Redirect( FindSessionValue( 'ListRoute', '/admin/image-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_image_block_controller = new DO_EDIT_IMAGE_BLOCK_CONTROLLER(  $language_code,  $image_block_id );
