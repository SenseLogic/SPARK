<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class DO_EDIT_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $department_id
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $number = GetPostValue( 'Number' );

        SetDatabaseDepartment( $department_id, $slug, $name, $text, $image, $number );

        Redirect( '/admin/department' );
    }
}

// -- STATEMENTS

 $do_edit_department_controller = new DO_EDIT_DEPARTMENT_CONTROLLER(  $department_id );
