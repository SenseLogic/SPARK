<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class VIEW_ARTICLE_BLOCKS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View article blocks';
        $this->ArticleBlockArray = GetDatabaseArticleBlockArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_article_blocks_view.php';
    }
}

// -- STATEMENTS

 $view_article_blocks_controller = new VIEW_ARTICLE_BLOCKS_CONTROLLER(  $language_code );
