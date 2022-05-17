<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class REMOVE_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a article';
        $this->Article = GetDatabaseArticleById( $article_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article' );

        require_once __DIR__ . '/' . '../VIEW/remove_article_view.php';
    }
}

// -- STATEMENTS

 $remove_article_controller = new REMOVE_ARTICLE_CONTROLLER(  $language_code,  $article_id );
