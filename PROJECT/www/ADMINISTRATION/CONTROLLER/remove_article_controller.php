<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class REMOVE_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $article_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a article';
        $this->Article = GetDatabaseArticleById( $article_id );
        $this->ListPage = FindSessionValue( 'ListPage', '/admin/article' );

        require_once __DIR__ . '/' . '../VIEW/remove_article_view.php';
    }
}

// -- STATEMENTS

 $remove_article_controller = new REMOVE_ARTICLE_CONTROLLER(  $article_id );
