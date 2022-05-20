<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/content_block_model.php';

// -- TYPES

class REMOVE_CONTENT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $content_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a content block';
        $this->ContentBlock = GetDatabaseContentBlockById( $content_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/content-block' );

        require_once __DIR__ . '/' . '../VIEW/remove_content_block_view.php';
    }
}

// -- STATEMENTS

 $remove_content_block_controller = new REMOVE_CONTENT_BLOCK_CONTROLLER(  $language_code,  $content_block_id );
