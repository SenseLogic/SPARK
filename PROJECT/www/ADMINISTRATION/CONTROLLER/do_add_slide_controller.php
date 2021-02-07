<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class DO_ADD_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $has_video = GetPostValue( 'HasVideo' );
         $number = GetPostValue( 'Number' );

        AddDatabaseSlide( $text, $image, $video, $has_video, $number );

        Redirect( '/admin/slide' );
    }
}

// -- STATEMENTS

 $do_add_slide_controller = new DO_ADD_SLIDE_CONTROLLER();
