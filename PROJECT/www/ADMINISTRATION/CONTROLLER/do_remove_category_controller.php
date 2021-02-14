<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class DO_REMOVE_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $category_id
        )
    {
        parent::__construct();

        RemoveDatabaseCategoryById( $category_id );

        Redirect( '/admin/category' );
    }
}

// -- STATEMENTS

 $do_remove_category_controller = new DO_REMOVE_CATEGORY_CONTROLLER(  $category_id );
