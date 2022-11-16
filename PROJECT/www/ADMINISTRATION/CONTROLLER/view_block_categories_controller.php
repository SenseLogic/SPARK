<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class VIEW_BLOCK_CATEGORIES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View block categories';
        $this->BlockCategoryArray = GetDatabaseBlockCategoryArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_block_categories_view.php';
    }
}

// -- STATEMENTS

 $view_block_categories_controller = new VIEW_BLOCK_CATEGORIES_CONTROLLER(  $language_code );
