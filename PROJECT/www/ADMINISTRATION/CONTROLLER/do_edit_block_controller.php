<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class DO_EDIT_BLOCK_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $page_id = GetPostValue( 'PageId' );
         $category_slug = GetPostValue( 'CategorySlug' );
         $content_slug = GetPostValue( 'ContentSlug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $minimum_height = GetPostValue( 'MinimumHeight' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $image_side = GetPostValue( 'ImageSide' );
         $video_path = GetPostValue( 'VideoPath' );

        SetDatabaseBlock( $block_id, $slug, $page_id, $category_slug, $content_slug, $type_slug, $number, $language_code_array, $minimum_height, $title, $text, $image_path, $image_vertical_position, $image_horizontal_position, $image_side, $video_path );

        Redirect( FindSessionValue( 'ListRoute', '/admin/block' ) );
    }
}

// -- STATEMENTS

 $do_edit_block_controller = new DO_EDIT_BLOCK_CONTROLLER(  $language_code,  $block_id );
