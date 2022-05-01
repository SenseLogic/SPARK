<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';

// -- TYPES

class DO_EDIT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $video_path = GetPostValue( 'VideoPath' );

        SetDatabaseBlock( $block_id, $slug, $type_slug, $title, $text, $image_path, $video_path );

        Redirect( FindSessionValue( 'ListPage', '/admin/block' ) );
    }
}

// -- STATEMENTS

 $do_edit_block_controller = new DO_EDIT_BLOCK_CONTROLLER(  $language_code,  $block_id );
