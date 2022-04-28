<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class EDIT_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_block_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a article block';
        $this->ArticleBlock = GetDatabaseArticleBlockById( $article_block_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/article-block' );

        require_once __DIR__ . '/' . '../VIEW/edit_article_block_view.php';
    }
}

// -- STATEMENTS

 $edit_article_block_controller = new EDIT_ARTICLE_BLOCK_CONTROLLER(  $language_code,  $article_block_id );
