<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class DO_ADD_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $article_slug = GetPostValue( 'ArticleSlug' );
         $block_slug = GetPostValue( 'BlockSlug' );

        AddDatabaseArticleBlock( $article_slug, $block_slug );

        Redirect( FindSessionValue( 'ListRoute', '/admin/article-block' ) );
    }
}

// -- STATEMENTS

 $do_add_article_block_controller = new DO_ADD_ARTICLE_BLOCK_CONTROLLER(  $language_code );
