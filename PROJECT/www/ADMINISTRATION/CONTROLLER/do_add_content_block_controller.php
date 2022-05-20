<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class DO_ADD_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
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
         $video_path = GetPostValue( 'VideoPath' );

        AddDatabaseContentBlock( $page_slug, $block_slug, $slug, $type_slug, $number, $title, $text, $image_path, $video_path );

        Redirect( FindSessionValue( 'ListRoute', '/admin/content-block' ) );
    }
}

// -- STATEMENTS

 $do_add_content_block_controller = new DO_ADD_CONTENT_BLOCK_CONTROLLER(  $language_code );
