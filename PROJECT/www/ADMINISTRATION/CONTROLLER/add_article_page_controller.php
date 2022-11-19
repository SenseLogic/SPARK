<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_page_model.php';

// -- TYPES

class ADD_ARTICLE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a article page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/article-page' );

        require_once __DIR__ . '/' . '../VIEW/add_article_page_view.php';
    }
}

// -- STATEMENTS

 $add_article_page_controller = new ADD_ARTICLE_PAGE_CONTROLLER(  $language_code );
