<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class EDIT_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $product_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a product';
        $this->Product = GetDatabaseProductById( $product_id );

        require_once __DIR__ . '/' . '../VIEW/edit_product_view.php';
    }
}

// -- STATEMENTS

 $edit_product_controller = new EDIT_PRODUCT_CONTROLLER(  $product_id );
