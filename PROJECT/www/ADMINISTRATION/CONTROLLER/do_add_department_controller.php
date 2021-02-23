<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/department_model.php';

// -- TYPES

class DO_ADD_DEPARTMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $number = GetPostValue( 'Number' );

        AddDatabaseDepartment( $slug, $name, $text, $image, $number );

        Redirect( '/admin/department' );
    }
}

// -- STATEMENTS

 $do_add_department_controller = new DO_ADD_DEPARTMENT_CONTROLLER();
