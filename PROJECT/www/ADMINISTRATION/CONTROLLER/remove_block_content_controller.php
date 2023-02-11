<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class REMOVE_BLOCK_CONTENT_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_content_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a block content';
        $this->BlockContent = GetDatabaseBlockContentById( $block_content_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block-content' );

        require_once __DIR__ . '/' . '../VIEW/remove_block_content_view.php';
    }
}

// -- STATEMENTS

 $remove_block_content_controller = new REMOVE_BLOCK_CONTENT_CONTROLLER(  $language_code,  $block_content_id );
