<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';

// -- TYPES

class EDIT_BLOCK_CONTENT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_content_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a block content';
        $this->BlockContent = GetDatabaseBlockContentById( $block_content_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/block-content' );

        require_once __DIR__ . '/' . '../VIEW/edit_block_content_view.php';
    }
}

// -- STATEMENTS

 $edit_block_content_controller = new EDIT_BLOCK_CONTENT_CONTROLLER(  $language_code,  $block_content_id );