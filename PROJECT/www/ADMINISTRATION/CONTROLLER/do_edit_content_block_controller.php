<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class DO_EDIT_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $content_block_id
        )
    {
        parent::__construct( $language_code );

         $page_slug = GetPostValue( 'PageSlug' );
         $block_slug = GetPostValue( 'BlockSlug' );
         $slug = GetPostValue( 'Slug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $video_path = GetPostValue( 'VideoPath' );

        SetDatabaseContentBlock( $content_block_id, $page_slug, $block_slug, $slug, $type_slug, $number, $title, $text, $image_path, $image_vertical_position, $image_horizontal_position, $video_path );

        Redirect( FindSessionValue( 'ListRoute', '/admin/content-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_content_block_controller = new DO_EDIT_CONTENT_BLOCK_CONTROLLER(  $language_code,  $content_block_id );
