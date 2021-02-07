<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class VIEW_SLIDES_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View slides';
        $this->SlideArray = GetDatabaseSlideArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_slides_view.php';
    }
}

// -- STATEMENTS

 $view_slides_controller = new VIEW_SLIDES_CONTROLLER();
