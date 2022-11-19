<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_page_model.php';

// -- TYPES

class REMOVE_ARTICLE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a article page';
        $this->ArticlePage = GetDatabaseArticlePageById( $article_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article-page' );

        require_once __DIR__ . '/' . '../VIEW/remove_article_page_view.php';
    }
}

// -- STATEMENTS

 $remove_article_page_controller = new REMOVE_ARTICLE_PAGE_CONTROLLER(  $language_code,  $article_page_id );
