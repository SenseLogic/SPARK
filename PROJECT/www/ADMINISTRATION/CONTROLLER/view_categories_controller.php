<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/category_model.php';

// -- TYPES

class VIEW_CATEGORIES_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View categories';
        $this->CategoryArray = GetDatabaseCategoryArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_categories_view.php';
    }
}

// -- STATEMENTS

 $view_categories_controller = new VIEW_CATEGORIES_CONTROLLER();
