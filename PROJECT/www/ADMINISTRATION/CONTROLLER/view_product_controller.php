<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/product_model.php';

// -- TYPES

class VIEW_PRODUCT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $product_id
        )
    {
        parent::__construct();

        $this->Title = 'View a product';
        $this->Product = GetDatabaseProductById( $product_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_product_view.php';
    }
}

// -- STATEMENTS

 $view_product_controller = new VIEW_PRODUCT_CONTROLLER(  $product_id );
