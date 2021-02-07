<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class DO_REMOVE_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $slide_id
        )
    {
        parent::__construct();

        RemoveDatabaseSlideById( $slide_id );

        Redirect( '/admin/slide' );
    }
}

// -- STATEMENTS

 $do_remove_slide_controller = new DO_REMOVE_SLIDE_CONTROLLER(  $slide_id );
