<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class VIEW_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View a article block';
        $this->ArticleBlock = GetDatabaseArticleBlockById( $article_block_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/article-block' );

        require_once __DIR__ . '/' . '../VIEW/view_article_block_view.php';
    }
}

// -- STATEMENTS

 $view_article_block_controller = new VIEW_ARTICLE_BLOCK_CONTROLLER(  $language_code,  $article_block_id );
