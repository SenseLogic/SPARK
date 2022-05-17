<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class ADD_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a article block';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article-block' );

        require_once __DIR__ . '/' . '../VIEW/add_article_block_view.php';
    }
}

// -- STATEMENTS

 $add_article_block_controller = new ADD_ARTICLE_BLOCK_CONTROLLER(  $language_code );
