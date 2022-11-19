<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/articles_page_model.php';

// -- TYPES

class VIEW_ARTICLES_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View articles pages';
        $this->ArticlesPageArray = GetDatabaseArticlesPageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_articles_pages_view.php';
    }
}

// -- STATEMENTS

 $view_articles_pages_controller = new VIEW_ARTICLES_PAGES_CONTROLLER(  $language_code );
