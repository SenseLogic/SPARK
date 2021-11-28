<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_REMOVE_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseArticleById( $article_id );

        Redirect( FindSessionValue( 'ListPage', '/admin/article' ) );
    }
}

// -- STATEMENTS

 $do_remove_article_controller = new DO_REMOVE_ARTICLE_CONTROLLER(  $language_code,  $article_id );
