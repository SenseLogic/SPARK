<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class REMOVE_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a article block';
        $this->ArticleBlock = GetDatabaseArticleBlockById( $article_block_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article-block' );

        require_once __DIR__ . '/' . '../VIEW/remove_article_block_view.php';
    }
}

// -- STATEMENTS

 $remove_article_block_controller = new REMOVE_ARTICLE_BLOCK_CONTROLLER(  $language_code,  $article_block_id );
