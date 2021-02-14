<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class VIEW_CATEGORY_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $category_id
        )
    {
        parent::__construct();

        $this->Title = 'View a category';
        $this->Category = GetDatabaseCategoryById( $category_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_category_view.php';
    }
}

// -- STATEMENTS

 $view_category_controller = new VIEW_CATEGORY_CONTROLLER(  $category_id );
