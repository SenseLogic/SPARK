<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class DO_EDIT_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $slide_id
        )
    {
        parent::__construct();

         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $has_video = GetPostValue( 'HasVideo' );
         $number = GetPostValue( 'Number' );

        SetDatabaseSlide( $slide_id, $text, $image, $video, $has_video, $number );

        Redirect( '/admin/slide' );
    }
}

// -- STATEMENTS

 $do_edit_slide_controller = new DO_EDIT_SLIDE_CONTROLLER(  $slide_id );
