<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class VIEW_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $department_id
        )
    {
        parent::__construct();

        $this->Title = 'View a department';
        $this->Department = GetDatabaseDepartmentById( $department_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_department_view.php';
    }
}

// -- STATEMENTS

 $view_department_controller = new VIEW_DEPARTMENT_CONTROLLER(  $department_id );
