<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class DO_REMOVE_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $product_id
        )
    {
        parent::__construct();

        RemoveDatabaseProductById( $product_id );

        Redirect( '/admin/product' );
    }
}

// -- STATEMENTS

 $do_remove_product_controller = new DO_REMOVE_PRODUCT_CONTROLLER(  $product_id );
