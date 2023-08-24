<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class DO_REMOVE_BLOCK_CATEGORY_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_category_id
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'publisher' ) )
        {
            RemoveDatabaseBlockCategoryById( $block_category_id );

            Redirect( GetParentRoute( null, '/admin/block-category', '*/<% block_category.Id %>' ) );
        }
    }
}

// -- STATEMENTS

 $do_remove_block_category_controller = new DO_REMOVE_BLOCK_CATEGORY_CONTROLLER(  $language_code,  $block_category_id );
