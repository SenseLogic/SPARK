<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class REMOVE_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $slide_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a slide';
        $this->Slide = GetDatabaseSlideById( $slide_id );

        require_once __DIR__ . '/' . '../VIEW/remove_slide_view.php';
    }
}

// -- STATEMENTS

 $remove_slide_controller = new REMOVE_SLIDE_CONTROLLER(  $slide_id );
