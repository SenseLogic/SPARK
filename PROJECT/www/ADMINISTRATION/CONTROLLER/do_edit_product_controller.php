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

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $category_slug = GetPostValue( 'CategorySlug' );

        SetDatabaseProduct( $product_id, $slug, $name, $text, $image, $video, $category_slug );

        Redirect( '/admin/product' );
    }
}

// -- STATEMENTS

 $do_edit_product_controller = new DO_EDIT_PRODUCT_CONTROLLER(  $product_id );
