<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class VIEW_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $slide_id
        )
    {
        parent::__construct();

        $this->Title = 'View a slide';
        $this->Slide = GetDatabaseSlideById( $slide_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_slide_view.php';
    }
}

// -- STATEMENTS

 $view_slide_controller = new VIEW_SLIDE_CONTROLLER(  $slide_id );
