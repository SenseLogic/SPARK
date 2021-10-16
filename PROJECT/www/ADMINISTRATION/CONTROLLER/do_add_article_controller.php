<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_ADD_ARTICLE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image_path = GetPostValue( 'ImagePath' );
         $video_path = GetPostValue( 'VideoPath' );
         $importance = GetPostValue( 'Importance' );
         $next_article_id = GetPostValue( 'NextArticleId' );

        AddDatabaseArticle( $slug, $name, $text, $image_path, $video_path, $importance, $next_article_id );

        Redirect( FindSessionValue( 'ListPage', '/admin/article' ) );
    }
}

// -- STATEMENTS

 $do_add_article_controller = new DO_ADD_ARTICLE_CONTROLLER();
