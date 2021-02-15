<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class DO_ADD_CATEGORY_CONTROLLER extends CONTROLLER
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

        AddDatabaseCategory( $slug, $name, $text, $image, $number );

        Redirect( '/admin/category' );
    }
}

// -- STATEMENTS

 $do_add_category_controller = new DO_ADD_CATEGORY_CONTROLLER();
