<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class EDIT_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $category_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a category';
        $this->Category = GetDatabaseCategoryById( $category_id );

        require_once __DIR__ . '/' . '../VIEW/edit_category_view.php';
    }
}

// -- STATEMENTS

 $edit_category_controller = new EDIT_CATEGORY_CONTROLLER(  $category_id );
