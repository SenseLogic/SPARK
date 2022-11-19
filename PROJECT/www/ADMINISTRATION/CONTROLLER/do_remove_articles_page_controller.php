<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/articles_page_model.php';

// -- TYPES

class DO_REMOVE_ARTICLES_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $articles_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseArticlesPageById( $articles_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/articles-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_articles_page_controller = new DO_REMOVE_ARTICLES_PAGE_CONTROLLER(  $language_code,  $articles_page_id );
