<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class REMOVE_PAGE_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_type_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a page type';
        $this->PageType = GetDatabasePageTypeById( $page_type_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-type' );

        require_once __DIR__ . '/' . '../VIEW/remove_page_type_view.php';
    }
}

// -- STATEMENTS

 $remove_page_type_controller = new REMOVE_PAGE_TYPE_CONTROLLER(  $language_code,  $page_type_id );
