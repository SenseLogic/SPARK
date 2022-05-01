<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class DO_EDIT_PAGE_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_type_id
        )
    {
        parent::__construct( $language_code );

         $slug = GetPostValue( 'Slug' );
         $title = GetPostValue( 'Title' );

        SetDatabasePageType( $page_type_id, $slug, $title );

        Redirect( FindSessionValue( 'ListPage', '/admin/page-type' ) );
    }
}

// -- STATEMENTS

 $do_edit_page_type_controller = new DO_EDIT_PAGE_TYPE_CONTROLLER(  $language_code,  $page_type_id );
