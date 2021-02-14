<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class DO_EDIT_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $category_id
        )
    {
        parent::__construct();

         $name = GetPostValue( 'Name' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $number = GetPostValue( 'Number' );

        SetDatabaseCategory( $category_id, $name, $slug, $text, $image, $number );

        Redirect( '/admin/category' );
    }
}

// -- STATEMENTS

 $do_edit_category_controller = new DO_EDIT_CATEGORY_CONTROLLER(  $category_id );
