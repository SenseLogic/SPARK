<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class DO_REMOVE_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $department_id
        )
    {
        parent::__construct();

        RemoveDatabaseDepartmentById( $department_id );

        Redirect( '/admin/department' );
    }
}

// -- STATEMENTS

 $do_remove_department_controller = new DO_REMOVE_DEPARTMENT_CONTROLLER(  $department_id );
