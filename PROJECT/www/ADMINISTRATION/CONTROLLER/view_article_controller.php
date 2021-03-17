<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class VIEW_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $article_id
        )
    {
        parent::__construct();

        $this->Title = 'View a article';
        $this->Article = GetDatabaseArticleById( $article_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_article_view.php';
    }
}

// -- STATEMENTS

 $view_article_controller = new VIEW_ARTICLE_CONTROLLER(  $article_id );
