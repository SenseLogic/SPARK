<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/articles_page_model.php';

// -- TYPES

class REMOVE_ARTICLES_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $articles_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a articles page';
        $this->ArticlesPage = GetDatabaseArticlesPageById( $articles_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/articles-page' );

        require_once __DIR__ . '/' . '../VIEW/remove_articles_page_view.php';
    }
}

// -- STATEMENTS

 $remove_articles_page_controller = new REMOVE_ARTICLES_PAGE_CONTROLLER(  $language_code,  $articles_page_id );
