<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_and_image_block_model.php';

// -- TYPES

class DO_ADD_TEXT_AND_IMAGE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $page_id = GetPostValue( 'PageId' );
         $block_id = GetPostValue( 'BlockId' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $image_side = GetPostValue( 'ImageSide' );
         $video_path = GetPostValue( 'VideoPath' );

        AddDatabaseTextAndImageBlock( $id, $page_id, $block_id, $type_slug, $number, $language_code_array, $title, $text, $image_path, $image_vertical_position, $image_horizontal_position, $image_side, $video_path );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text-and-image-block' ) );
    }
}

// -- STATEMENTS

 $do_add_text_and_image_block_controller = new DO_ADD_TEXT_AND_IMAGE_BLOCK_CONTROLLER(  $language_code );
