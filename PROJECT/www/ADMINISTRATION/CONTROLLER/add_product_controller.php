<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class ADD_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a product';

        require_once __DIR__ . '/' . '../VIEW/add_product_view.php';
    }
}

// -- STATEMENTS

 $add_product_controller = new ADD_PRODUCT_CONTROLLER();
