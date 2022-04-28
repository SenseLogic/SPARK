<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class DO_REMOVE_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_block_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseArticleBlockById( $article_block_id );

        Redirect( FindSessionValue( 'ListPage', '/admin/article-block' ) );
    }
}

// -- STATEMENTS

 $do_remove_article_block_controller = new DO_REMOVE_ARTICLE_BLOCK_CONTROLLER(  $language_code,  $article_block_id );
