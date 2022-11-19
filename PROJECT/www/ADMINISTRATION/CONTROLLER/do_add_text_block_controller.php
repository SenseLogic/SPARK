<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_block_model.php';

// -- TYPES

class DO_ADD_TEXT_BLOCK_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $page_id = GetPostValue( 'PageId' );
         $block_id = GetPostValue( 'BlockId' );
         $type_slug = GetPostValue( 'TypeSlug' );
         $number = GetPostValue( 'Number' );
         $language_code_array = GetJsonObject( GetPostValue( 'LanguageCodeArray' ) );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );

        AddDatabaseTextBlock( $id, $page_id, $block_id, $type_slug, $number, $language_code_array, $title, $text );

        Redirect( FindSessionValue( 'ListRoute', '/admin/text-block' ) );
    }
}

// -- STATEMENTS

 $do_add_text_block_controller = new DO_ADD_TEXT_BLOCK_CONTROLLER(  $language_code );
