<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_page_model.php';

// -- TYPES

class VIEW_ARTICLE_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View article pages';
        $this->ArticlePageArray = GetDatabaseArticlePageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_article_pages_view.php';
    }
}

// -- STATEMENTS

 $view_article_pages_controller = new VIEW_ARTICLE_PAGES_CONTROLLER(  $language_code );
