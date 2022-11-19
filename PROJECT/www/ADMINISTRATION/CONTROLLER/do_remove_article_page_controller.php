<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_page_model.php';

// -- TYPES

class DO_REMOVE_ARTICLE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseArticlePageById( $article_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/article-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_article_page_controller = new DO_REMOVE_ARTICLE_PAGE_CONTROLLER(  $language_code,  $article_page_id );
