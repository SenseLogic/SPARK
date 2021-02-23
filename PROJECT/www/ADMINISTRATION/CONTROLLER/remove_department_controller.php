<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class REMOVE_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $department_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a department';
        $this->Department = GetDatabaseDepartmentById( $department_id );

        require_once __DIR__ . '/' . '../VIEW/remove_department_view.php';
    }
}

// -- STATEMENTS

 $remove_department_controller = new REMOVE_DEPARTMENT_CONTROLLER(  $department_id );
