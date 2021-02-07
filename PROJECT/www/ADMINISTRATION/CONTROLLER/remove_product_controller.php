<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class REMOVE_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $product_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a product';
        $this->Product = GetDatabaseProductById( $product_id );

        require_once __DIR__ . '/' . '../VIEW/remove_product_view.php';
    }
}

// -- STATEMENTS

 $remove_product_controller = new REMOVE_PRODUCT_CONTROLLER(  $product_id );
