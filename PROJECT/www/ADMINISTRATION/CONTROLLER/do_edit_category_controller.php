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

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $number = GetPostValue( 'Number' );

        SetDatabaseCategory( $category_id, $slug, $name, $text, $image, $number );

        Redirect( '/admin/category' );
    }
}

// -- STATEMENTS

 $do_edit_category_controller = new DO_EDIT_CATEGORY_CONTROLLER(  $category_id );
