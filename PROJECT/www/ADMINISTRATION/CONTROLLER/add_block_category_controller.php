<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class ADD_BLOCK_CATEGORY_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'publisher' ) )
        {
            $this->Title = 'Add a block category';

            AddParentRoute();

            require_once __DIR__ . '/' . '../VIEW/add_block_category_view.php';
        }
    }
}

// -- STATEMENTS

 $add_block_category_controller = new ADD_BLOCK_CATEGORY_CONTROLLER(  $language_code );
