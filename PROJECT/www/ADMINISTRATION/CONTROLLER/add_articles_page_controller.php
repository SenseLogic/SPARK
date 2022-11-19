<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/articles_page_model.php';

// -- TYPES

class ADD_ARTICLES_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a articles page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/articles-page' );

        require_once __DIR__ . '/' . '../VIEW/add_articles_page_view.php';
    }
}

// -- STATEMENTS

 $add_articles_page_controller = new ADD_ARTICLES_PAGE_CONTROLLER(  $language_code );
