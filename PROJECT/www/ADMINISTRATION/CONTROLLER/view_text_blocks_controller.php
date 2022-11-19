<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class VIEW_TEXT_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View text blocks';
        $this->TextBlockArray = GetDatabaseTextBlockArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_text_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_text_blocks_controller = new VIEW_TEXT_BLOCKS_CONTROLLER(  $language_code );
