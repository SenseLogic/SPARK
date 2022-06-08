<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';

// -- TYPES

class DO_EDIT_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $route = GetPostValue( 'Route' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $video_path = GetPostValue( 'VideoPath' );
         $is_active = GetPostValue( 'IsActive' );

        SetDatabasePage( $page_id, $slug, $type_slug, $route, $title, $text, $image_path, $image_vertical_position, $image_horizontal_position, $video_path, $is_active );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page' ) );
    }
}

// -- STATEMENTS

 $do_edit_page_controller = new DO_EDIT_PAGE_CONTROLLER(  $language_code,  $page_id );
