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

         $name = GetPostValue( 'Name' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $number = GetPostValue( 'Number' );

        AddDatabaseCategory( $name, $slug, $text, $image, $number );

        Redirect( '/admin/category' );
    }
}

// -- STATEMENTS

 $do_add_category_controller = new DO_ADD_CATEGORY_CONTROLLER();
