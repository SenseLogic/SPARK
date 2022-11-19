<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/legal_notice_page_model.php';

// -- TYPES

class ADD_LEGAL_NOTICE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a legal notice page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/legal-notice-page' );

        require_once __DIR__ . '/' . '../VIEW/add_legal_notice_page_view.php';
    }
}

// -- STATEMENTS

 $add_legal_notice_page_controller = new ADD_LEGAL_NOTICE_PAGE_CONTROLLER(  $language_code );
