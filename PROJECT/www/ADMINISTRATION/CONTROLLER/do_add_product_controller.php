<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class DO_ADD_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $name = GetPostValue( 'Name' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );

        AddDatabaseProduct( $name, $slug, $text, $image, $video );

        Redirect( '/admin/product' );
    }
}

// -- STATEMENTS

 $do_add_product_controller = new DO_ADD_PRODUCT_CONTROLLER();
