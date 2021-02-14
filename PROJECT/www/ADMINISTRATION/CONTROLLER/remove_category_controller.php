<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class REMOVE_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $category_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a category';
        $this->Category = GetDatabaseCategoryById( $category_id );

        require_once __DIR__ . '/' . '../VIEW/remove_category_view.php';
    }
}

// -- STATEMENTS

 $remove_category_controller = new REMOVE_CATEGORY_CONTROLLER(  $category_id );
