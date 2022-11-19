<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_page_model.php';

// -- TYPES

class VIEW_ARTICLE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View a article page';
        $this->ArticlePage = GetDatabaseArticlePageById( $article_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article-page' );

        require_once __DIR__ . '/' . '../VIEW/view_article_page_view.php';
    }
}

// -- STATEMENTS

 $view_article_page_controller = new VIEW_ARTICLE_PAGE_CONTROLLER(  $language_code,  $article_page_id );
