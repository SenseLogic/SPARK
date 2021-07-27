<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_EDIT_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        $article_id
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $video_path = GetPostValue( 'VideoPath' );

        SetDatabaseArticle( $article_id, $slug, $name, $text, $image_path, $video_path );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_edit_article_controller = new DO_EDIT_ARTICLE_CONTROLLER(  $article_id );
