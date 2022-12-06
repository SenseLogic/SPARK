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

         $route = GetPostValue( 'Route' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $is_active = GetPostValue( 'IsActive' );
         $title = GetPostValue( 'Title' );
         $teaser = GetPostValue( 'Teaser' );
         $image_path = GetPostValue( 'ImagePath' );
         $image_vertical_position = GetPostValue( 'ImageVerticalPosition' );
         $image_horizontal_position = GetPostValue( 'ImageHorizontalPosition' );
         $video_path = GetPostValue( 'VideoPath' );
         $meta_title = GetPostValue( 'MetaTitle' );
         $meta_description = GetPostValue( 'MetaDescription' );

        SetDatabasePage( $page_id, $route, $type_slug, $number, $language_code_array, $is_active, $title, $teaser, $image_path, $image_vertical_position, $image_horizontal_position, $video_path, $meta_title, $meta_description );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page' ) );
    }
}

// -- STATEMENTS

 $do_edit_page_controller = new DO_EDIT_PAGE_CONTROLLER(  $language_code,  $page_id );
