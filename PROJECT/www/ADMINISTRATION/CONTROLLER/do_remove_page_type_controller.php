<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class DO_REMOVE_PAGE_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_type_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabasePageTypeById( $page_type_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/page-type' ) );
    }
}

// -- STATEMENTS

 $do_remove_page_type_controller = new DO_REMOVE_PAGE_TYPE_CONTROLLER(  $language_code,  $page_type_id );
