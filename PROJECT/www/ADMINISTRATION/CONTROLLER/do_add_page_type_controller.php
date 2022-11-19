<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class DO_ADD_PAGE_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $id = GetPostValue( 'Id' );
         $slug = GetPostValue( 'Slug' );
         $title = GetPostValue( 'Title' );

        AddDatabasePageType( $id, $slug, $title );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page-type' ) );
    }
}

// -- STATEMENTS

 $do_add_page_type_controller = new DO_ADD_PAGE_TYPE_CONTROLLER(  $language_code );
