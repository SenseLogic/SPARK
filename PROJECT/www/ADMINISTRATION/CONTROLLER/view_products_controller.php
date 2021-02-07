<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class VIEW_PRODUCTS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View products';
        $this->ProductArray = GetDatabaseProductArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_products_view.php';
    }
}

// -- STATEMENTS

 $view_products_controller = new VIEW_PRODUCTS_CONTROLLER();
