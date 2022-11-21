<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';

// -- TYPES

class REMOVE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a page';
        $this->Page = GetDatabasePageById( $page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/page' );

        require_once __DIR__ . '/' . '../VIEW/remove_page_view.php';
    }
}

// -- STATEMENTS

 $remove_page_controller = new REMOVE_PAGE_CONTROLLER(  $language_code,  $page_id );
