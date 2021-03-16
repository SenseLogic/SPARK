<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_EDIT_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        $article_id
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );

        SetDatabaseArticle( $article_id, $slug, $name, $text, $image, $video );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_edit_article_controller = new DO_EDIT_ARTICLE_CONTROLLER(  $article_id );
