<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class VIEW_BLOCK_CONTENT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_content_id
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'contributor' ) )
        {
            $this->Title = 'View a block content';
            $this->BlockContent = GetDatabaseBlockContentById( $block_content_id );

            AddParentRoute();

            require_once __DIR__ . '/' . '../VIEW/view_block_content_view.php';
        }
    }
}

// -- STATEMENTS

 $view_block_content_controller = new VIEW_BLOCK_CONTENT_CONTROLLER(  $language_code,  $block_content_id );
