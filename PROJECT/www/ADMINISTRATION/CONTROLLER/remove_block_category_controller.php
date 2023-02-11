<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class REMOVE_BLOCK_CATEGORY_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_category_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a block category';
        $this->BlockCategory = GetDatabaseBlockCategoryById( $block_category_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block-category' );

        require_once __DIR__ . '/' . '../VIEW/remove_block_category_view.php';
    }
}

// -- STATEMENTS

 $remove_block_category_controller = new REMOVE_BLOCK_CATEGORY_CONTROLLER(  $language_code,  $block_category_id );
