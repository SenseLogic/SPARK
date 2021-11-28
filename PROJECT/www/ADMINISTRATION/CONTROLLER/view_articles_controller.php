<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class VIEW_ARTICLES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View articles';
        $this->ArticleArray = GetDatabaseArticleArray();

        SetSessionValue( 'ListPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_articles_view.php';
    }
}

// -- STATEMENTS

 $view_articles_controller = new VIEW_ARTICLES_CONTROLLER(  $language_code );
