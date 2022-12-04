<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class DO_EDIT_TEXT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $text_block_id
        )
    {
        parent::__construct( $language_code );

         $page_id = GetPostValue( 'PageId' );
         $category_slug = GetPostValue( 'CategorySlug' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $minimum_height = GetPostValue( 'MinimumHeight' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );

        SetDatabaseTextBlock( $text_block_id, $page_id, $category_slug, $type_slug, $number, $language_code_array, $minimum_height, $title, $text );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text-block' ) );
    }
}

// -- STATEMENTS

 $do_edit_text_block_controller = new DO_EDIT_TEXT_BLOCK_CONTROLLER(  $language_code,  $text_block_id );