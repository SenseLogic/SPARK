<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';

// -- TYPES

class EDIT_PAGE_TYPE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_type_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a page type';
        $this->PageType = GetDatabasePageTypeById( $page_type_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page-type' );

        require_once __DIR__ . '/' . '../VIEW/edit_page_type_view.php';
    }
}

// -- STATEMENTS

 $edit_page_type_controller = new EDIT_PAGE_TYPE_CONTROLLER(  $language_code,  $page_type_id );
