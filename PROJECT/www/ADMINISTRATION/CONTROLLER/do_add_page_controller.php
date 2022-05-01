<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';

// -- TYPES

class DO_ADD_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $route = GetPostValue( 'Route' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $video_path = GetPostValue( 'VideoPath' );
         $is_active = GetPostValue( 'IsActive' );

        AddDatabasePage( $slug, $type_slug, $route, $title, $text, $image_path, $video_path, $is_active );

        Redirect( FindSessionValue( 'ListPage', '/admin/page' ) );
    }
}

// -- STATEMENTS

 $do_add_page_controller = new DO_ADD_PAGE_CONTROLLER(  $language_code );
