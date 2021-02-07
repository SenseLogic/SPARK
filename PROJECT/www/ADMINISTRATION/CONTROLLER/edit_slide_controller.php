<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class EDIT_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $slide_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a slide';
        $this->Slide = GetDatabaseSlideById( $slide_id );

        require_once __DIR__ . '/' . '../VIEW/edit_slide_view.php';
    }
}

// -- STATEMENTS

 $edit_slide_controller = new EDIT_SLIDE_CONTROLLER(  $slide_id );
