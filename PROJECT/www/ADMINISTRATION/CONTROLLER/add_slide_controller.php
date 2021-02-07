<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/slide_model.php';

// -- TYPES

class ADD_SLIDE_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a slide';

        require_once __DIR__ . '/' . '../VIEW/add_slide_view.php';
    }
}

// -- STATEMENTS

 $add_slide_controller = new ADD_SLIDE_CONTROLLER();
