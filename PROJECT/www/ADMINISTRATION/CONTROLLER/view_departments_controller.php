<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class VIEW_DEPARTMENTS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View departments';
        $this->DepartmentArray = GetDatabaseDepartmentArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_departments_view.php';
    }
}

// -- STATEMENTS

 $view_departments_controller = new VIEW_DEPARTMENTS_CONTROLLER();
