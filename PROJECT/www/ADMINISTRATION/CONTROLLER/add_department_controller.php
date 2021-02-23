<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class ADD_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a department';

        require_once __DIR__ . '/' . '../VIEW/add_department_view.php';
    }
}

// -- STATEMENTS

 $add_department_controller = new ADD_DEPARTMENT_CONTROLLER();
