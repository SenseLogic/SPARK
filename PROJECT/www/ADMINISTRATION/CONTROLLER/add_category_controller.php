<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class ADD_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a category';

        require_once __DIR__ . '/' . '../VIEW/add_category_view.php';
    }
}

// -- STATEMENTS

 $add_category_controller = new ADD_CATEGORY_CONTROLLER();
