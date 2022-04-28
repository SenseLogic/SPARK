<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_block_model.php';

// -- TYPES

class DO_EDIT_ARTICLE_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $article_block_id
        )
    {
        parent::__construct( $language_code );

         $article_slug = GetPostValue( 'ArticleSlug' );
         $block_slug = GetPostValue( 'BlockSlug' );

        SetDatabaseArticleBlock( $article_block_id, $article_slug, $block_slug );

        Redirect( FindSessionValue( 'ListPage', '/admin/article-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_article_block_controller = new DO_EDIT_ARTICLE_BLOCK_CONTROLLER(  $language_code,  $article_block_id );
