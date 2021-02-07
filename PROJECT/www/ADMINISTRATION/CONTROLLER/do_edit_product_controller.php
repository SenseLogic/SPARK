<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class DO_EDIT_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $product_id
        )
    {
        parent::__construct();

         $name = GetPostValue( 'Name' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );

        SetDatabaseProduct( $product_id, $name, $slug, $text, $image, $video );

        Redirect( '/admin/product' );
    }
}

// -- STATEMENTS

 $do_edit_product_controller = new DO_EDIT_PRODUCT_CONTROLLER(  $product_id );
