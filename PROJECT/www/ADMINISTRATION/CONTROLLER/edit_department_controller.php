<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class EDIT_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $department_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a department';
        $this->Department = GetDatabaseDepartmentById( $department_id );

        require_once __DIR__ . '/' . '../VIEW/edit_department_view.php';
    }
}

// -- STATEMENTS

 $edit_department_controller = new EDIT_DEPARTMENT_CONTROLLER(  $department_id );
